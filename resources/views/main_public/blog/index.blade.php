@extends('layouts.LayoutPublic')
@section('page-title','Blog')
@section('content')
    {{--    ========= header ========--}}
   <header class="blog__header">
        <div class="about__title p-5">
            <div class="container about__title--ml ml-5">
                <div class="about__title--heading ml-5">
                    <h1 class="text-capitalize mb-0 font-weight-bold">blogs</h1>
                </div>
            </div>
        </div>
    </header>
    {{--========== End header =========--}}
{{--    ========== Blog main ===========--}}
    <section class="blog__main mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9 order-2 order-lg-0" >
                    <div class="mb-2 ml-auto select-div">
                        <select id="select-sort-type" name="sortType" class="form-control" aria-label="sortType">
                            <option value="" selected>Unsorted</option>
                            <option value="0">Newest</option>
                            <option value="1">Oldest</option>
                            <option value="2">Title Ascending</option>
                            <option value="3">Title Descending</option>
                        </select>
                    </div>
                    <div id="blog-main-list">
                        <div class="text-center mt-5">
                            <i class="fas fa-box-open fa-2x"></i>
                            <h5>No Blogs Found</h5>
                        </div>
                    </div>
                    <div id="pagination-custom" class="pagination-custom mt-auto">
                        <ul class="d-flex list-unstyled"></ul>
                    </div>
                </div>
                <div class="col-12 col-lg-3 order-1">
                    <div class="mb-3">
                        <h5 class="blog-heading mb-3 position-relative">
                            <span style="z-index: 10;background: #f8fafc" class="position-relative pr-1"><i class="fas fa-bahai" style="font-size: 14px"></i> Search Form</span>
                        </h5>
                        <form id="blog-page-search">
                            <div class="w-100 position-relative">
                                <input id="search-title-field" class="form-control w-100 pr-4" aria-label="title" name="title" placeholder="Search by title..."/>
                                <div class="position-absolute" style="top: 10px; right: 10px"><i class="fas fa-search"></i></div>
                            </div>
                        </form>
                    </div>
                    <div class="d-none d-lg-block">
                        <h5 class="blog-heading position-relative mb-3">
                            <span class="position-relative pr-1" style="z-index: 10;background: #f8fafc"><i class="fas fa-bahai" style="font-size: 14px"></i>  Related Blogs</span>
                        </h5>
                        <ul class="list-unstyled">
                            @foreach($relatedBlog as $relaBlog)
                                <li class="mb-2"><a href="/blogs/{{$relaBlog->id}}">{{$relaBlog->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="d-none d-lg-block">
                        <h5 class="blog-heading position-relative">
                            <span class="position-relative pr-1" style="z-index: 10;background: #f8fafc"><i class="fas fa-bahai" style="font-size: 14px"></i>  Tags</span>
                        </h5>
                        @php
                            $listTags = array(
                                "Contemporary","Graphic","Painting","Painting","Metalwork Art","Illustration","Sculpture","Visual Art","Crafts","Art Glossary",
                                "Fine Art","Animation Art","Ceramics","Conceptual Art","Folk Art","Jewellery Art","Land Art",)
                        @endphp
                        <ul class="list-unstyled d-flex flex-wrap mt-3">
                            @foreach($listTags as $tag)
                                <li class="btn btn-dark p-1 mr-1 mb-1">{{$tag}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{--    ========= End Blog ========--}}
@endsection
@section('script-tag')
    <script>
        $(document).ready(function(){
            getBlogs(blogFilter);
        });
        let blogFilter = {
            page:1,
            title:undefined,
            sort_Type:undefined,
        }
        function getBlogs(search){
            $.ajax({
                url:`blogs-list`,
                method:'GET',
                data:{
                    page:search.page,
                    sortType:search.sort_Type,
                    title:search.title,
                },
                success:(result)=>{
                    console.log(result);
                    $('#blog-main-list').html('');
                    if(result.data.length > 0){
                        result.data.forEach(blog =>{
                            let blogItem = `
                                <div class="about__title mb-5">
                                    <div class="blog__post--image">
                                        <img class="w-100" alt="" style="max-height: 400px" src="/images_store/blogs/${blog.image}"></div>
                                    <div class="blog__post--content p-3">
                                        <a href="/blogs/${blog.id}"><h4 class="font-weight-bold blog__content-title">${blog.title}</h4></a>
                                        <ul class="post__list list-unstyled">
                                            <li class="d-inline-block pr-2">${new Date(blog.created_at).toLocaleDateString("en-US",{ year: 'numeric', month: 'long', day: 'numeric' })}</li>
                                            <li class="d-inline-block px-2"><i class="fas fa-user-tag mr-1"></i><span>${blog.author}</span></li>
                                            <li class="d-inline-block px-2"><i class="fas fa-tags mr-1"></i><span>${blog.tag}</span></li>
                                            <li class="d-inline-block px-2"><i class="fas fa-comment-alt"></i> 3</li>
                                        </ul>
                                        <div class="post__content--heading">
                                            <p class="post__content--text">${blog.content_post}</p>
                                            <p class="blog__link--detail">
                                                <a href="/blogs/${blog.id}" class="text-capitalize font-weight-bold">Read more
                                                    <i class="fa-solid fa-angle-right blog__icon--fz pl-2"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            `;
                            $('#blog-main-list').append(blogItem);
                        });
                        $('#pagination-custom ul').html('');
                        const totalPage = result.total;
                        const numberPerPage = result.per_page;
                        for(let i =1; i<=Math.ceil(totalPage/numberPerPage);i++){
                            let pageItem = `<li class="mr-1 ${i === search.page ? "active" : ""}" onclick="getBlogs({sortType:${search.sortType},title:${search.title},page: ${i}})" class="page-item-custom">${i}</li>`;
                            $('#pagination-custom ul').append(pageItem);
                        }
                    }else{
                        $('#pagination-custom ul').html('');
                        $('#blog-main-list').html('').append(
                            `<div class="text-center mt-5">
                                <i class="fas fa-box-open fa-2x"></i>
                                <h5>No Blogs Found</h5>
                            </div>`
                        );
                    }
                }
            })
        }
        $('#select-sort-type').change((e)=>{
            let sortValue = e.currentTarget.value;
            let titleValue = $('#search-title-field').val();
            getBlogs({
                page:1,
                sort_Type: sortValue ? sortValue : undefined,
                title: titleValue ? titleValue : undefined,
            })
        });

        $('#blog-page-search').submit((e)=>{
            let sortValue = $('#select-sort-type').val();
            let titleValue = $('#search-title-field').val();
           e.preventDefault();
            getBlogs({
                page:1,
                sort_Type: sortValue ? sortValue : undefined,
                title: titleValue ? titleValue : undefined,
            })
        });
    </script>
@endsection

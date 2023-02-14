@extends('frontend::layouts.master')
@section('content')
<section class="page-banner-wrap bg-cover sameoverlay" style="background-image: url('{{Storage::url($project->bg_image)}}')">
    <div class="inner-overlay"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-heading text-white">
                    <div class="sub-title">
                        <h4><strong>Our Mission:</strong> Food, Education, Medicine</h4>
                    </div>
                    <div class="page-title">
                        <h1>Projects Detail</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Projects Detail</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<section class="project-detail newfafa">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="blog-post-details border-wrap project-detail-wrap">
                    <div class="single-blog-post post-details">
                        <div class="post-content">

                            <h2>{{$project->title}}</h2>
                            <img src="{{Storage::url($project->image)}}" alt="">
                            <p>{!! $project->description !!}</p>
                        </div>
                    </div>


                </div>
          <!--      <div id="accordion" class="mt-3 fffaq-section">-->
          <!--          <h3>Our Partners</h3>-->
          <!--  <div class="card">-->
          <!--    <div class="card-header" id="heading-1">-->
          <!--      <h5 class="mb-0">-->
          <!--        <a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">-->
          <!--                            International Partner-->
          <!--                          </a>-->
          <!--      </h5>-->
          <!--    </div>-->
          <!--    <div id="collapse-1" class="collapse show" data-parent="#accordion" aria-labelledby="heading-1">-->
          <!--      <div class="card-body">-->
          <!--        FXCOPIER is the worlds most reliable remote trade copier. Its allow you to copy trades almost instantly between hundreds of MT4 accounts through the use of technology. Many of the industries leading money managers use FXCopier to easily manage multiple-->
          <!--        client accounts in tandem.-->
          <!--      </div>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--  <div class="card">-->
          <!--    <div class="card-header" id="heading-2">-->
          <!--      <h5 class="mb-0">-->
          <!--        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">-->
          <!--                            National Partner-->
          <!--                          </a>-->
          <!--      </h5>-->
          <!--    </div>-->
          <!--    <div id="collapse-2" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">-->
          <!--      <div class="card-body">-->
          <!--        After subscription you will get our special trade copier. If you want to use this copier for business purpose or other commercial pupose then directly contact with www.fxcopier.co.uk.-->
          <!--      </div>-->
          <!--    </div>-->
          <!--  </div>-->
            
          <!--</div>-->
          <div id="accordion" class="accordion mt-3">
              <h3>Our Partners</h3>
        <div class="card mb-0">
            <div class="card-header collapsed" data-toggle="collapse" href="#collapseOne">
                <a class="card-title">
                    International Partners
                </a>
            </div>
            <div id="collapseOne" class="card-body collapse show" data-parent="#accordion" >
                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                    aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                    craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </p>
            </div>
            <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                <a class="card-title">
                  National Partners
                </a>
            </div>
            <div id="collapseTwo" class="card-body collapse" data-parent="#accordion" >
                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                    aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                    craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </p>
            </div>
            <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                <a class="card-title">
                  International Partners
                </a>
            </div>
            <div id="collapseThree" class="collapse" data-parent="#accordion" >
                <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                    aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. samus labore sustainable VHS.
                </div>
            </div>
        </div>
    </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="main-sidebar">
                    <div class="single-sidebar-widget">
                        <div class="wid-title">
                            <h3>Related Projects</h3>
                        </div>
                        <div class="popular-posts">
                            @foreach($relatedprojects as $project)
                            <div class="single-post-item">
                                <div class="thumb bg-cover" style="background-image: url('{{Storage::url($project->image)}}')"></div>
                                <div class="post-content">
                                    <h5><a href="{{route('projectDetail',$project->slug)}}">{{$project->title}}</a></h5>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<section class="part-coll">
    <div class="container">
        
    </div>
</section>
@endsection
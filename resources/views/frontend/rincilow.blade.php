@extends('layouts.frontend')
@section('content')
   <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>{{$lowongan->nama_low}}</h2>
        <ol class="breadcrumb">
            <li><a href="index.html">{{  $lowongan->Perusahaan->nama_pers }}</a></li>
            <li><a href="#" class="active">Blog</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

    <!-- blog area -->
    <section class="blog_all">
        <div class="container">
            <div class="row m0 blog_row">
                <div class="col-sm-8 main_blog">
                    <img src="images/blog/blog_hed-1.jpg" alt="">
                    <div class="col-xs-1 p0">
                       <div class="blog_date">
                           <a href="#">18</a>
                            <a href="#">Oct</a>
                       </div>
                    </div>
                    <div class="col-xs-11 blog_content">
                        <a class="blog_heading" href="#">{{$lowongan->nama_low}}</a>
                        <a class="blog_admin" href="#"><i class="fa fa-user" aria-hidden="true">{{  $lowongan->Perusahaan->nama_pers }}</i></a>
                        <ul class="like_share">
                            <li><a href="#"><i class="fa fa-comment" aria-hidden="true"></i>3</a></li>
                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i>10</a></li>
                            <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                        </ul>
                        <p>{{$lowongan->deskripsi_iklan}}</p>
                        <div class="tag">
                            <a href="" data-toggle="modal" data-target="#lamar">LAMAR SEKARANG</a>
                        </div>
                    </div>
                    

                    <div class="comment_area reply_comment">
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="images/testimonial-1.jpg" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <a class="media-heading" href="#">Prodip Ghosh</a>
                                <h5>Oct 18, 2016</h5>
                                <p>Curabitur eleifend mattis velit, gravida posuere mauris dapibus non.</p>
                                <a class="reply" href="#">Reply</a>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <div class="col-sm-4 widget_area">
                    <div class="resent">
                        <h3>RECENT POSTS</h3>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="images/blog/rs-1.jpg" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="">Get informed about construction industry trends &amp; development.</a>
                                <h6>Oct 19, 2016</h6>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="images/blog/rs-2.jpg" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="">Get informed about construction industry trends &amp; development.</a>
                                <h6>Oct 19, 2016</h6>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="images/blog/rs-3.jpg" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="">Get informed about construction industry trends &amp; development.</a>
                                <h6>Oct 19, 2016</h6>
                            </div>
                        </div>
                    </div>
                    <div class="resent">
                        <h3>KATEGORI</h3>
                        <ul class="architecture">
                            <li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>{{  $lowongan->Kategori->nama_kategori }}</a></li>
                            <li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Architecture</a></li>
                            <li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Building</a></li>
                            <li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Design</a></li>
                        </ul>
                    </div>
                    <div class="resent">
                        <h3>ARCHIVES</h3>
                        <ul class="architecture">
                            <li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>February 2016</a></li>
                            <li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>April 2016</a></li>
                            <li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>June 2016</a></li>
                        </ul>
                    </div>
                    <div class="search">
                        <input type="search" name="search" class="form-control" placeholder="Search">
                    </div>
                    <div class="resent">
                        <h3>Tag</h3>
                        <ul class="tag">
                            <li><a href="#">PAINTING</a></li>
                            <li><a href="#">CONSTRUCTION</a></li>
                            <li><a href="#">Architecture</a></li>
                            <li><a href="#">Building</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Design</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="lamar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <br>
      <br>
      <br>
      <br>
      <br>
        <h5 class="modal-title" id="exampleModalLabel">Lamar Disini</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('pelamar.store') }}" method="post" >
                    {{ csrf_field() }}
                    <input type="hidden" name="low_id" value="{{$lowongan->id}}">
                    <div class="form-group {{ $errors->has('telepon') ? ' has-error' : '' }}">
                        <label class="control-label">TELEPON</label>    
                        <input type="text" name="telepon" class="form-control"  required>
                        @if ($errors->has('telepon'))
                            <span class="help-block">
                                <strong>{{ $errors->first('telepon') }}</strong>
                            </span>
                        @endif
                    </div>
                        <div class="form-group {{ $errors->has('pesan') ? ' has-error' : '' }}">
                        <label class="control-label">PESAN</label>  
                        <input type="text" name="pesan" class="form-control"  required>
                        @if ($errors->has('pesan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pesan') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('file_cv') ? ' has-error' : '' }}">
                        <label class="control-label">CV</label> 
                        <input type="file" name="file_cv" class="form-control"  required>
                        @if ($errors->has('file_cv'))
                            <span class="help-block">
                                <strong>{{ $errors->first('file_cv') }}</strong>
                            </span>
                        @endif
                    </div>

                       
                    
                    <div class="form-group">

                    </div>
                
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Kirim Lamaran</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection

@extends('layouts.app')
@section('title','About - Plant Cafe')
@section('body-class','about-page')
@section('js')
<script src="{{asset('js/ui.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
@endsection
@section('breadcrumb')
<nav aria-label="breadcrumb" class="breadcrumb-wrapper style-1">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">About</li>
            </ol>
        </div>
</nav>
@endsection
@section('main')
        <section class="inner-wrapper">
            <div class="container ">
                <h2>Who We Are</h2>
                <div class="row ">
                    <div class="col-lg-12 ">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic nostrum fugit, dolore fuga aliquam ullam consectetur obcaecati provident nobis ipsa inventore atque vitae, iusto nam nemo accusantium odio perspiciatis aspernatur officia fugiat unde voluptatibus, earum adipisci laudantium. Pariatur placeat recusandae soluta eligendi error nam sequi possimus magni maiores rerum. Dolore debitis at dolorem doloremque officiis ducimus reiciendis! Reprehenderit culpa dolor, repellendus fuga earum odit natus temporibus, sit enim atque quos ipsum aliquid omnis vitae sint sed ab explicabo beatae doloribus fugiat molestias incidunt? Exercitationem architecto obcaecati sint. Quae a repudiandae ullam commodi cupiditate, ipsa laudantium iusto vero quisquam velit voluptates?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, consequatur incidunt. Reprehenderit voluptates, dignissimos corrupti aut distinctio vero, nesciunt blanditiis earum sequi doloribus, quam aliquid veniam architecto repellendus dolore. Eum adipisci vitae quisquam! Placeat doloribus debitis eius sequi laboriosam necessitatibus enim amet ullam sunt tempore, quae deserunt odit non est quod obcaecati, maxime sint impedit vel laborum dolorem exercitationem. Voluptatibus nobis, necessitatibus odio quaerat at unde aliquam modi consequatur perspiciatis dicta amet id totam dignissimos eos. Temporibus nulla iste distinctio dignissimos? Nobis obcaecati inventore ad velit ratione expedita aliquid saepe sit at reprehenderit eos soluta odio, reiciendis doloremque ipsum facere officiis neque quia dicta animi suscipit? Sed quisquam rem officia voluptates officiis, necessitatibus maxime aliquid iusto accusantium, velit impedit. Veritatis harum aperiam, ab sunt, cupiditate architecto accusamus fugiat tenetur cumque praesentium dicta earum quam quisquam aliquam veniam nemo? Vitae sunt quam animi inventore nulla eligendi velit saepe, ex maiores pariatur.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque hic doloremque deserunt exercitationem. Nulla illum non sed voluptatem dolorem. Minima praesentium fuga temporibus quisquam molestiae itaque sed reiciendis debitis illo odio, pariatur, ea qui? Pariatur, cum maxime? Sequi soluta reiciendis nostrum similique ipsa? Doloribus consequuntur dignissimos quasi ratione maiores laborum asperiores repellat architecto modi ad natus aperiam possimus tempora ut soluta nihil, perspiciatis nobis aspernatur minus. Voluptatibus eveniet cupiditate quia vel doloribus nemo quam veritatis asperiores reprehenderit neque quos expedita voluptatum doloremque atque, hic commodi illum optio nam. Modi architecto eius error at praesentium unde officiis doloribus maxime nemo libero!</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- <section class="inner-wrapper">
            <div class="container ">
                <h2>Our Process</h2>
            </div>
        </section> -->

        <section class="inner-wrapper">
            <div class="container ">
                <h2>The Team</h2>
                <div class="row ">
                    <div class="col-sm-4">
                        <div class="card border">
                            <img class="img-fluid d-block mx-auto " src="{{asset('images/team/austin-wade.jpg')}}" alt="partner">
                            <div class="card-body">
                                <h5>John Doe</h5>
                                <p>Product Manager</p>
                            </div>
                            <div class="card-footer">
                                <ul class="list-inline social-icons">
                                    <li class="list-inline-item "><a href="# " title="Facebook"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item "><a href="# " title="instagram"><i
                                                class="fab fa-instagram"></i></a></li>
                                    <li class="list-inline-item "><a href="# " title="Twitter"><i
                                                class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card border">
                            <img class="img-fluid d-block mx-auto " src="{{asset('images/team/luis-villasmil.jpg')}}" alt="partner">
                            <div class="card-body">
                                <h5>John Doe</h5>
                                <p>Product Manager</p>
                            </div>
                            <div class="card-footer">
                                <ul class="list-inline social-icons">
                                    <li class="list-inline-item "><a href="# " title="Facebook"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item "><a href="# " title="instagram"><i
                                                class="fab fa-instagram"></i></a></li>
                                    <li class="list-inline-item "><a href="# " title="Twitter"><i
                                                class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card border">
                            <img class="img-fluid d-block mx-auto " src="{{asset('images/team/stefan-stefancik.jpg')}}" alt="partner">
                            <div class="card-body">
                                <h5>John Doe</h5>
                                <p>Product Manager</p>
                            </div>
                            <div class="card-footer">
                                <ul class="list-inline social-icons">
                                    <li class="list-inline-item "><a href="# " title="Facebook"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item "><a href="# " title="instagram"><i
                                                class="fab fa-instagram"></i></a></li>
                                    <li class="list-inline-item "><a href="# " title="Twitter"><i
                                                class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
@extends('layouts.home')

@section('title', 'Contact | D3-Ecommerce')

@section('content')
            <!--Section: Content-->
            <section class="mb-5">
                <h4 class="mb-5 text-center"><strong>Facilis consequatur eligendi</strong></h4>
        
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6">
                    <form>
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                            <input type="text" id="form3Example1" class="form-control" />
                            <label class="form-label" for="form3Example1">First name</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                            <input type="text" id="form3Example2" class="form-control" />
                            <label class="form-label" for="form3Example2">Last name</label>
                            </div>
                        </div>
                        </div>
        
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                        <input type="email" id="form3Example3" class="form-control" />
                        <label class="form-label" for="form3Example3">Email address</label>
                        </div>
        
                        <!-- Password input -->
                        <div class="form-outline mb-4">
                        <input type="password" id="form3Example4" class="form-control" />
                        <label class="form-label" for="form3Example4">Password</label>
                        </div>
        
                        <!-- Checkbox -->
                        <div class="form-check d-flex justify-content-center mb-4">
                            {{-- <input
                                class="form-check-input me-2"
                                type="checkbox"
                                value=""
                                id="form2Example3"
                                checked
                            /> --}}
                            <label class="form-check-label" for="form2Example3">
                                Subscribe to our newsletter
                            </label>
                        </div>
        
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-2">
                        Kirim
                        </button>
                    </form>
                    </div>
                </div>
                </section>
                <!--Section: Content-->
            </div>
            </main>
            <!--Main layout-->
        
            <!--Footer-->
            <footer class="bg-light text-lg-start">
        
            <hr class="m-0" />
        
            <div class="text-center py-4 align-items-center">
                <p>Follow D3 E-Commerce on social media</p>
                <a
                href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA"
                class="btn btn-primary m-1"
                role="button"
                rel="nofollow"
                target="_blank"
                >
                <i class="fab fa-youtube"></i>
                </a>
                <a
                href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA"
                class="btn btn-primary m-1"
                role="button"
                rel="nofollow"
                target="_blank"
                >
                <i class="fab fa-google"></i>
                </a>
                <a
                href="https://www.facebook.com/mdbootstrap"
                class="btn btn-primary m-1"
                role="button"
                rel="nofollow"
                target="_blank"
                >
                <i class="fab fa-facebook-f"></i>
                </a>
                <a
                href="https://twitter.com/MDBootstrap"
                class="btn btn-primary m-1"
                role="button"
                rel="nofollow"
                target="_blank"
                >
                <i class="fab fa-twitter"></i>
                </a>
                <a
                href="https://github.com/mdbootstrap/mdb-ui-kit"
                class="btn btn-primary m-1"
                role="button"
                rel="nofollow"
                target="_blank"
                >
                <i class="fab fa-github"></i>
                </a>
            </div>
@endsection

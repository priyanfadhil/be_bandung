@extends('template.navigation')

@section('konten')
<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>GetShayna by BuildWith Angga</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
    <body>
       <section class="testimoni">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap");

        * {
            font-family: 'Inter', sans-serif !important;
        }

        body .img-testimoni {
            z-index: -1 !important;
            right: 0 !important;
            position: absolute;
            margin-top: 92px;
            margin-right: 68px;
        }

        body .testimoni {
            padding-top: 50px;
            padding-bottom: 50px;
        }

        body .testimoni h1 {
            color: #232323;
            font-weight: 700 !important;
        }

        @media screen and (min-width: 768px) {
            body .testimoni {
                padding-bottom: 188px;
            }

            body .testimoni h1 {
                font-size: 60px !important;
            }
        }

        @media screen and (min-width: 768px) {
            body .testimoni .container {
                padding-top: 120px;
            }

            body .testimoni .container h1 {
                width: 722px;
                font-size: 60px;
                line-height: 90px !important;
            }
        }

        body .testimoni .container h1 {
            line-height: 50px;
            font-weight: 700 !important;
        }

        body .testimoni .container .testi-text {
            line-height: 28px;
            color: #9C9C9C;
        }

        @media screen and (min-width: 768px) {
            body .testimoni .container .testi-text {
                width: 500px;
            }
        }

        body .testimoni .container .card {
            border-radius: 28px;
            border: none !important;
            -webkit-box-shadow: 20px 8px 18px rgba(178, 177, 255, 0.05);
            box-shadow: 20px 8px 18px rgba(178, 177, 255, 0.05);
        }

        body .testimoni .container .card p {
            color: #9C9C9C;
        }

        body .cl-black {
            color: black !important;
        }

        body .cl-orange {
            color: #FF9900;
        }

        body .cl-dusty-grey {
            color: #9C9C9C;
        }

        body .place .img-place-header {
            width: 100% !important;
        }
    </style>
    <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-House/testimonial-photo-bg.png"
        alt="bg-testimoni" class="img-testimoni d-none d-md-block">
    <div class="container px-4">
        <div class="row pb-md-4">
            <h1>
                Here is what our clients are saying about us
            </h1>
        </div>
        <div class="row mt-5">
            <div class="col-md-6 p-0">
                <div class="row mx-1 mb-4">
                    <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/star-yellow.svg"
                        alt="star" class="mr-2">
                    <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/star-yellow.svg"
                        alt="star" class="mr-2">
                    <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/star-yellow.svg"
                        alt="star" class="mr-2">
                    <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/star-yellow.svg"
                        alt="star" class="mr-2">
                    <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/star-yellow.svg"
                        alt="star" class="mr-2">
                </div>
                <p class="testi-text pb-md-4">
                    “Great way to make the first market value estmate and then to
                    select an experienced active broker in the local area for a more
                    in-depth study. Professional and personalised advice, while
                    avoiding going through the big brokers who charge fees that are
                    too much.”
                </p>
                <div class="row my-5 pl-3 mx-0">
                    <div class="col-2 px-0">
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-House/testimonial-user.png"
                            alt="testi-user" class="img-fluid">
                    </div>
                    <div class="col-10 pl-4 my-auto">
                        <h3 class="font-weight-bold">
                            Laurent Dominic
                        </h3>
                        <p class="m-0 font-weight-semi-bold cl-dusty-grey">
                            Founder of Blank Company
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4" style="width: 20.25rem;">
                    <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/place.png"
                        alt="img-place" class="img-fluid img-place-header">
                    <h3 class="mt-4 font-weight-bold">
                        Hotel Tentrem
                    </h3>
                    <p class="mb-5">
                        150m
                    </p>
                    <div class="row">
                        <div class="col-8">
                            <p class="cl-black">
                                Start from <strong>40 USD</strong>
                            </p>
                        </div>
                        <div class="col-4 cl-orange text-right">
                            <strong>
                                <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/star-yellow.svg"
                                    alt="star" class="img-fluid"> 4.8
                            </strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
  </html>
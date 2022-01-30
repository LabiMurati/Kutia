{{--
  Template Name: Custom Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('components.banner')
    @include('partials.second-banner')
    @include('partials.content')
    @include('components.hero')
    @include('components.contact-information')
  @endwhile
@endsection

{{--
  Template Name: People Search Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('components.people-search')
    @include('components.contact-information')
  @endwhile
@endsection

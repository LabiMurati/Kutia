{{--
  Template Name: Upcoming event Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('components.single-upcoming-event')
    @include('components.contact-information')
  @endwhile
@endsection

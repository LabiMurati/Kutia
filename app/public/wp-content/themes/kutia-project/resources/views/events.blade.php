{{--
  Template Name: Events
--}}

@extends('layouts.app')
@section('content')
  @while(have_posts()) @php the_post() @endphp
  @include('partials.page-header')
  @include('components.all-events')
    @include('components.contact-information')
  @endwhile
@endsection

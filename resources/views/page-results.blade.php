{{--
  Template Name: Results
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
		@php(CXSeries\CXSeriesPlugin\list_results())
    @include('partials.content-page')
  @endwhile
@endsection

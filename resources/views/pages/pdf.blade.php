@extends('layouts.app')

@section('title', 'PDF Viewer')

@section('content')
    <h1>View PDF</h1>
    <iframe src="{{ asset('docs/LalitM_resume.pdf') }}" width="100%" height="600px"></iframe>
@endsection

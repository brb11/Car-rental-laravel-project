@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div id="redirect-message">
                            {{ __('You are logged in!') }}
                        </div>

                        <button id="redirect-button" class="btn btn-primary" style="display: none;">index</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var redirectButton = document.getElementById('redirect-button');
            redirectButton.style.display = 'block';

            redirectButton.addEventListener('click', function() {



                window.location.href = '/';
            });
        });
    </script>
@endsection

@extends('default')
@section('body')

<style type="text/css">
	table{ height: 200px; overflow-y: scroll;display:block;}
	th { width: 100%;}

	.bl-info{
		border-left: 3px solid #3F3E91;
	}

	.bl-danger{
		border-left: 3px solid #FF2121;
	}
</style>

<section class="courses_area pt-120 pb-130" id="curso">
        <!-- container-sm para maioria dos dispositivos -->
        <div class="container-sm ">
            <div class="row justify-content-md-center">
                <x-slot name="header">
                    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __('Profile') }}
                    </h2>
                </x-slot>



                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                            <div class="max-w-xl">
                                @include('profile.partials.update-profile-information-form')
                            </div>
                        </div>

                        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                            <div class="max-w-xl">
                                @include('profile.partials.update-password-form')
                            </div>
                        </div>

                        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                            <div class="max-w-xl">
                                @include('profile.partials.delete-user-form')
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>


@section('javascript')
<script type="text/javascript" src="{{asset('js/venda.js')}}"></script>
@endsection
@endsection









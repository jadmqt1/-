<?php

use App\Models\article;
use App\Models\BonLivraison;

$livraisons = BonLivraison::all();
$articles = article::all();
?>

@extends('layout.app')
@section('content')
<main class="mt-0 transition-all duration-200 ease-soft-in-out ps">
    <section class="min-h-screen mb-32">
        <div class="relative flex items-start pt-12 pb-56 m-4 overflow-hidden bg-center bg-cover min-h-50-screen rounded-xl"
            style="background-image: url('../assets/img/curved-images/curved14.jpg')">
            <span
                class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-gray-900 to-slate-800 opacity-60"></span>
            <div class="container z-10">
                <div class="flex flex-wrap justify-center -mx-3">
                    <div class="w-full max-w-full px-3 mx-auto mt-0 text-center lg:flex-0 shrink-0 lg:w-5/12">
                        <h1 class="mt-12 mb-2 text-white">Welcome!</h1>
                        <p class="text-white">Use these awesome forms to login or create new account in your project for
                            free.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="flex flex-wrap -mx-3 -mt-48 md:-mt-56 lg:-mt-48">
                <div class="w-full max-w-full px-3 mx-auto mt-0 md:flex-0 shrink-0 md:w-7/12 lg:w-5/12 xl:w-4/12">
                    <div
                        class="relative z-0 flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                        <div class="flex-auto p-6">
                            <form method="post" action="{{ route('details.update', $details->id) }}">
                                @csrf
                                @method('put')

                                <div class="mb-4">
                                    <label for="date">Qte</label>
                                    <input name="qte" value="{{ $details->qte }}" type="text"
                                        class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                        placeholder="Date" aria-label="Date" aria-describedby="date-addon">
                                </div>
                                <div class="mb-4">
                                    <label for="montant">Prix</label>
                                    <input name="prix" value="{{ $details->prix }}" type="text"
                                        class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                        placeholder="Montant" aria-label="Montant" aria-describedby="montant-addon">
                                </div>

                                <div class="mb-4">
                                    <label for="bon_livraison_id">Bon Livraison</label>
                                    <select class="form-control text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            name="bon_livraison_id">
                                        @foreach($livraisons as $livraison)
                                            <option value="{{ $livraison->id }}" {{ $livraison->id == $details->bon_livraison_id ? 'selected' : '' }}>
                                                {{ $livraison->id }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label for="mode_regelment_id">Article</label>
                                    <select class="form-control text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            name="article_id">
                                        @foreach($articles as $article)
                                            <option value="{{ $article->id }}" {{ $article->id == $details->article_id ? 'selected' : '' }}>
                                                {{ $article->id }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="text-center">
                                    <button type="submit"
                                        class="inline-block w-full px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">
                                        Ajouter
                                    </button>
                                </div>
                                <p class="mt-4 mb-0 leading-normal text-sm">Already have an account? <a
                                        href="../pages/sign-in.html" class="font-bold text-slate-700">Sign in</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
    </div>
    <div class="ps__rail-y" style="top: 0px; right: 0px;">
        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
    </div>
</main>
<script defer=""
    src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317"
    integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA=="
    data-cf-beacon="{&quot;rayId&quot;:&quot;869755088c476623&quot;,&quot;version&quot;:&quot;2024.3.0&quot;,&quot;token&quot;:&quot;1b7cbb72744b40c580f8633c6b62637e&quot;}"
    crossorigin="anonymous"></script>
<script src="../assets/js/plugins/perfect-scrollbar.min.js" async=""></script>
<script src="../assets/js/soft-ui-dashboard-tailwind.min.js?v=1.0.5" async=""></script>
@endsection

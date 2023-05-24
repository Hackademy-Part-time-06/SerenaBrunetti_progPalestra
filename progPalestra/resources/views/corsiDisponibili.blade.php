<x-main>
    <x-navbar />


    <div class="container cards-courses">

        <div class="row">

            <h1 class="my-4">Corsi disponibili
            </h1>

            @foreach ($corsi as $corso)
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card h-100">
                        <a href=""><img class="card-img-top p-3" src="{{ $corso['img'] }}" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="{{ route('dettagliCorso', ['name' => $corso['name']]) }}"
                                    class="text-decoration-none text-card">{{ $corso['name'] }}</a>
                            </h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet
                                numquam
                                aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque
                                deserunt,
                                dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>


    <x-footer />
</x-main>

<h2>
    Ciao, noi siamo i dati
</h2>

{{-- <ul> --}}

        @foreach ($data_arr as $data)
            {{-- <li>
                {{$data['data3']}} --}}
                {{-- <ul> --}}
                    {{-- @forelse ($data['data4'] as $result)
                        <li>
                            {{ $result }}
                        </li>
                    @empty
                        Nessuna sottolista
                    @endforelse --}}

                    @forelse ($data['data5'] as $resulta)

                       <p>Ciao ci sono anche io '{{ $resulta }}'</p>

                    @empty
                        Qui non c'è nulla
                    @endforelse
                {{-- </ul> --}}
            {{-- </li> --}}
        @endforeach

{{-- </ul> --}}

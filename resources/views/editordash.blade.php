{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard for Editor') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in as Editor!
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Data
        </h2>
    </x-slot>

    <div class="py-12 container">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <hr>
                    <h3>Q1</h3>
                    <table class="table-auto  border-collapse border border-slate-400">
                        <tr>
                            <th class="border border-slate-300">Id</th>
                            <th class="border border-slate-300">Farmer Name</th>
                            <th class="border border-slate-300">Farmer Prenome</th>
                            <th class="border border-slate-300">Farmer Addrece</th>
                        </tr>
                            @foreach ($q1 as $item)
                            <tr>
                                <th class="border border-slate-300">{{ $item->id}}</th>
                                <th class="border border-slate-300">{{ $item->agr_nom}}</th>
                                <th class="border border-slate-300">{{ $item->agr_prn}}</th>
                                <th class="border border-slate-300">{{ $item->agr_resid}}</th>
                            </tr>
                            @endforeach
                    </table>
                    <hr>

                    {{-- Q2 --}}
                    <h3>Q2 : Noms des parcelles dont la superficie est supérieure à 500</h3>
                    <table class="table-auto  border-collapse border border-slate-400">
                        <tr>
                            <th  class="border border-slate-300">Id</th>
                            <th class="border border-slate-300">Parcel Name</th>
                        </tr>
                            @foreach ($q2 as $item)
                            <tr>
                                <th class="border border-slate-300">{{ $item->par_id}}</th>
                                <th class="border border-slate-300">{{ $item->par_nom}}</th>
                            </tr>
                            @endforeach
                    </table>
                    <hr>

                    {{-- Q3 --}}
                    <h3>Q3 : les parcelles situées à Arith dont la superficie est supérieure à 200 et inférieure à 500.</h3>
                    <table class="table-auto  border-collapse border border-slate-400">
                        <tr>
                            <th class="border border-slate-300">Id</th>
                            <th class="border border-slate-300">Parcel Name</th>
                            <th class="border border-slate-300">Parcel Location</th>
                            <th class="border border-slate-300">Parcel Area</th>
                            <th class="border border-slate-300">Farmer Id</th>
                
                        </tr>
                            @foreach ($q3 as $item)
                            <tr>
                                <th class="border border-slate-300">{{ $item->par_id}}</th>
                                <th class="border border-slate-300">{{ $item->par_nom}}</th>
                                <th class="border border-slate-300">{{ $item->par_lieu}}</th>
                                <th class="border border-slate-300">{{ $item->par_superficie}}</th>
                                <th class="border border-slate-300">{{ $item->par_prop}}</th>
                
                            </tr>
                            @endforeach
                    </table>
                    <hr>
                    {{-- Q4 --}}
                    <h3>Q4 : les parcelles avec le nom de leurs propriétaires.</h3>
                    <table class="table-auto  border-collapse border border-slate-400">
                        <tr>
                            <th class="border border-slate-300">Id</th>
                            <th class="border border-slate-300">Parcel Name</th>
                            <th class="border border-slate-300">Parcel Location</th>
                            <th class="border border-slate-300">Parcel Area</th>
                            <th class="border border-slate-300">Farmer Name</th>

                        </tr>
                            @foreach ($q4 as $item)
                            <tr>
                                <th class="border border-slate-300">{{ $item->par_id}}</th>
                                <th class="border border-slate-300">{{ $item->par_nom}}</th>
                                <th class="border border-slate-300">{{ $item->par_lieu}}</th>
                                <th class="border border-slate-300">{{ $item->par_superficie}}</th>
                                <th class="border border-slate-300">{{ $item->agr_nom}}</th>

                            </tr>
                            @endforeach
                    </table>
                    <hr>
                    {{-- Q5 --}}
                    <h3>Q5 : la superficie totale des parcelles</h3>
                    {{ $q5 }}


                    <hr>
                    {{-- Q6 --}}

                    <h3>le nom de la plus grande parcelle</h3>
                    <table class="table-auto  border-collapse border border-slate-400">
                            <tr>
                                <th class="border border-slate-300">{{ $q6->par_nom }}</th>
                
                            </tr>
                            
                    </table>
                    <hr>
                    {{-- Q7 --}}
                    <h3>Q7 : le nom de la plus petite parcelle</h3>
                    <table class="table-auto  border-collapse border border-slate-400">
                            <tr>
                                <th class="border border-slate-300">{{ $q7->par_nom }}</th>
                
                            </tr>
                            
                    </table>
                    <hr>
                    {{-- Q8 --}}
                    <h3>Q8 : les interventions effectuées entre le 07-11-2011 et le 09-02-2012</h3>
                    <table class="table-auto  border-collapse border border-slate-400">
                        <tr>
                            <th class="border border-slate-300">Parcelle Id</th>
                            <th class="border border-slate-300">Intervention Date</th>
                            <th class="border border-slate-300">Intervention Noumber des jours</th>
                        </tr>
                            @foreach ($q8 as $item)
                            <tr>
                                <th class="border border-slate-300">{{ $item->int_par_id}}</th>
                                <th class="border border-slate-300">{{ $item->int_debut}}</th>
                                <th class="border border-slate-300">{{ $item->int_nb_jrs}}</th>
                            </tr>
                            @endforeach
                    </table>
                    <hr>
                    {{-- Q9 --}}
                    <h3>Q9 : pour chaque intervention le nom de la parcelle concernée</h3>
                    <table class="table-auto  border-collapse border border-slate-400">
                        <tr>
                            <th class="border border-slate-300">Parcelle Id</th>
                            <th class="border border-slate-300">Parcelle Nome</th>
                            <th class="border border-slate-300">Intervention Date</th>
                            <th class="border border-slate-300">Intervention Noumber des jours</th>
                        </tr>
                            @foreach ($q9 as $item)
                            <tr>
                                <th class="border border-slate-300">{{ $item->int_par_id}}</th>
                                <th class="border border-slate-300">{{ $item->par_nom}}</th>
                                <th class="border border-slate-300">{{ $item->int_debut}}</th>
                                <th class="border border-slate-300">{{ $item->int_nb_jrs}}</th>
                            </tr>
                            @endforeach
                    </table>
                    <hr>
                    {{-- Q10 --}}
                    <h3>Q10 :  pour chaque intervention le nom de la parcelle concernée et le nom de l'employé.</h3>
                    <table class="table-auto  border-collapse border border-slate-400">
                        <tr>
                            <th class="border border-slate-300">Employe Nome</th>
                            <th class="border border-slate-300">Parcelle Id</th>
                            <th class="border border-slate-300">Parcelle Nome</th>
                            <th class="border border-slate-300">Intervention Date</th>
                            <th class="border border-slate-300">Intervention Noumber des jours</th>
                        </tr>
                            @foreach ($q10 as $item)
                            <tr>
                                <th class="border border-slate-300">{{ $item->emp_nom}} {{ $item->emp_prn }}</th>
                                <th class="border border-slate-300">{{ $item->int_par_id}}</th>
                                <th class="border border-slate-300">{{ $item->par_nom}}</th>
                                <th class="border border-slate-300">{{ $item->int_debut}}</th>
                                <th class="border border-slate-300">{{ $item->int_nb_jrs}}</th>
                            </tr>
                            @endforeach
                    </table>
                    <hr>
                    {{-- Q11 --}}
                    <h3>Q11 : les interventions de l'employe Pernet</h3>
                    <table class="table-auto  border-collapse border border-slate-400">
                        <tr>
                            <th class="border border-slate-300">Employe Nome</th>
                            <th class="border border-slate-300">Parcelle Id</th>
                            <th class="border border-slate-300">Intervention Date</th>
                            <th class="border border-slate-300">Intervention Noumber des jours</th>
                        </tr>
                            @foreach ($q11 as $item)
                            <tr>
                                <th class="border border-slate-300">{{ $item->emp_nom}} {{ $item->emp_prn }}</th>
                                <th class="border border-slate-300">{{ $item->int_par_id}}</th>
                                <th class="border border-slate-300">{{ $item->int_debut}}</th>
                                <th class="border border-slate-300">{{ $item->int_nb_jrs}}</th>
                            </tr>
                            @endforeach
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


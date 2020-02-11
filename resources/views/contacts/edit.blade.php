@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Modification du contact <b><!-- TODO Afficher le nom du contact --></b></h3>
                <form action="{{route('contacts.update')}}" method="post">
                    <!-- TODO mise en place de la form pour modifier un contact -->
                    
                    {{csrf_field()}}

                        <input type="name" name="name" placeholder="name">
                        <br>
                        <input type="tel" name="tel" placeholder="tel">
                        <br>
                        <input type="email" name="email" placeholder="email">
                        <br>
                        
                        <button type="submit">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.appadmin')
@section('title')
    Ajouter slider
@endsection
@section('contenu')
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Ajouter Slider</h4>
                            <form class="cmxform" id="commentForm" method="post" action="sauverslider">
                                {{csrf_field()}}
                                <fieldset>
                                    <div class="form-group">
                                        <label for="cname">Déscription 1</label>
                                        <input id="cname" class="form-control" name="desc1" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="cname">Déscription 2</label>
                                        <input id="cname" class="form-control" name="desc2" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="cname">Image</label>
                                        <input id="cname" class="form-control" name="slider_image" type="file">
                                    </div>
                                    <input class="btn btn-primary" type="submit" value="Valider">
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>

@endsection




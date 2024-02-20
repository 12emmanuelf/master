<div>
    <h1 class="text-center">MODIFIER LE BORDEREAU </h1>


    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>

    @endif
   <div class="col-md-10 mx-auto">
            <form method="post" action="{{ route('bordereau.update', ['id' => $bordereau->id]) }}" >
                @method('PATCH')
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="date"  style="color: #007bff;">date:</label>
                            <input type="date" class="form-control" id="date" name="date" value="{{ $bordereau->date}}">

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="nom_des"  style="color: #007bff;">Nom destinataire:</label>
                            <input type="text" class="form-control" id="nom_des" name="nom_des" value="{{ $bordereau->nom_des}}">

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="coursier_id" style="color: #007bff;">Coursier :</label>
                            <select class="form-control" id="coursier_id" name="coursier_id">
                                <option>Sélectionnez un coursier</option>
                                @foreach($coursiers as $coursier)
                                    <option value="{{ $coursier->id }}">{{ $coursier->nom }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Enregistrer</button>

            </form>

    </div>

</div>

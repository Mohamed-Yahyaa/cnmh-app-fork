<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table table-striped" id="tuteurs-table">
            <thead>
            <tr>
                <th>Etat Civil Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Sexe</th>
                <th>Telephone</th>
                <th>Email</th>
                <th>Adresse</th>
                <th>Cin</th>
                <th>Remarques</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tuteurs as $tuteur)
                <tr>
                    <td>{{ $tuteur->etat_civil_id }}</td>
                    <td>{{ $tuteur->nom }}</td>
                    <td>{{ $tuteur->prenom }}</td>
                    <td>{{ $tuteur->sexe }}</td>
                    <td>{{ $tuteur->telephone }}</td>
                    <td>{{ $tuteur->email }}</td>
                    <td>{{ $tuteur->adresse }}</td>
                    <td>{{ $tuteur->cin }}</td>
                    <td>{{ $tuteur->remarques }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['tuteurs.destroy', $tuteur->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('tuteurs.show', [$tuteur->id]) }}"
                               class='btn btn-default btn-sm'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('tuteurs.edit', [$tuteur->id]) }}"
                               class='btn btn-default btn-sm'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $tuteurs])
        </div>
        <div class="float-left">
                                <button type="button" class="btn btn-default swalDefaultQuestion">
                                    <i class="fas fa-download"></i> Exporter
                                </button>
                                <button type="button" class="btn btn-default swalDefaultQuestion">
                                    <i class="fas fa-file-import"></i> Importer
                                </button>
        </div>
    </div>
</div>

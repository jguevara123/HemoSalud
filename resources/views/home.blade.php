@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 offset-md-12 mb-3">
            <a href="#" onclick="FormPatient()" class="btn btn-succes" style="float: right; background-color: #6ad06a; border: 0px solid; color: white;">
                Nuevo Paciente
            </a>
        </div>
        <div class="col-md-12">
            <div class="alert alert-success" role="alert" id="alertMSG" style="display: none;">
              
            </div>

            <div class="alert alert-danger" role="alert" id="alertMSG2" style="display: none;">
              
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Cédula</th>
                                <th>Fecha de Nacimiento</th>
                                <th>Registro</th>
                                <th>Acciones</th>
                            </thead>
                            <tbody id="listPatients">
                                {{-- @if(count($patients)>0)
                                    @foreach($patients as $item)
                                        <tr>
                                            <td></td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->nacionality}}.-{{$item->ci}}</td>
                                            <td>{{$item->birth}}</td>
                                            <td>{{$item->created_at}}</td>
                                            <td>
                                                <button class="btn btn-warnig btn-sm" onclick="editPatient('{{$item->id}}')">
                                                    <i class="fa fa-trash"></i>Editar
                                                </button>
                                                <button class="btn btn-danger btn-sm" onclick="deletePatient('{{$item->id}}')">
                                                    <i class="fa fa-trash"></i>Eliminar
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <td colspan="6" align="center">Sin resultados</td>
                                @endif --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="modal fade" id="createPatient" tabindex="-1" role="dialog" aria-labelledby="createPatientLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <center>
                <h5 class="modal-title" id="createPatientLabel" style="color: black"><span id="TitleModal"></span> Paciente</h5>
            </center>
          </div>
          <div class="modal-body">
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="name" class="form-control" required placeholder="Nombre" id="FormName">
            </div>
            <div class="form-group">
                <label>Cédula</label>
                <input type="number" name="ci" class="form-control" required placeholder="Cédula" id="FormCI">
                <span style="display: hide; color: red;" id="ciRegistered"></span>
            </div>
            <div class="form-group">
                <label>Fecha de Nacimiento</label>
                <input type="date" name="birth" class="form-control" id="FormDate" required>
            </div>
          </div>
          <div class="modal-footer">
            <input type="hidden" name="id" id="FormId">
            <button type="button" class="btn btn-succes border border-success" onclick="createPatient()" id="BTNsave">Guardar</button>
            <button type="button" class="btn btn-succes border border-success" onclick="UpdatePatient()" style="display: none" id="BTNedit">Editar</button>
          </div>
        </div>
      </div>
    </div>

    <form enctype="multipart/form-data" id="FormPatients" method="post">
        <div class="modal fade" id="viewFiles" tabindex="-1" role="dialog" aria-labelledby="createPatientLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <center>
                    <h5 class="modal-title" id="createPatientLabel" style="color: black"><span id="TitleModal">Ver Archivos</h5>
                </center>
              </div>
              <div class="modal-body">
                <div class="form-group">
                    <label style="color:black">Subir Archivo</label>
                    <input type="file" name="file" id="FormFile" style="color: black;" accept="application/pdf">
                </div>
                <hr>
                <div id="listFiles"></div>
              </div>
            </div>
          </div>
        </div>
    </form>

    <!-- Load jQuery require for isotope -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script>

    $(window).load(function() {
        getPatients();
    });


    function getPatients() {
        $('#listPatients').empty();
        $.get('patients/get/1',function (data) {
        })
        .done(function(data) {
            if(data.length>0){
                for (var i = 0; i < data.length; i++) {
                    var num =i+1;
                    $('#listPatients').append(
                        '<tr>'+
                            '<td>'+num+'</td>'+
                            '<td>'+data[i].name+'</td>'+
                            '<td>'+data[i].nacionality+'.-'+data[i].ci+'</td>'+
                            '<td>'+data[i].birth+'</td>'+
                            '<td>'+data[i].created_at+'</td>'+
                            '<td>'+
                                 '<button class="btn btn-danger btn-sm rounded" style="color:white;border-radius:30px !important;" onclick="viewFiles('+data[i].id+')">'+
                                    '<i class="fa fa-pdf"></i>Archivos'+
                                '</button>&nbsp;'+
                                '<button class="btn btn-warnig btn-sm rounded" style="background-color: #ffff00a1; border-radius:30px !important;" onclick="editPatient('+data[i].id+')">'+
                                    '<i class="fa fa-trash"></i>Editar'+
                                '</button>&nbsp;'+
                                '<button class="btn btn-danger btn-sm rounded" style="color:white;border-radius:30px !important;" onclick="deletePatient('+data[i].id+')">'+
                                    '<i class="fa fa-trash"></i>Eliminar'+
                                '</button>'+
                            '</td>'+
                        '</tr>'
                    );
                }
            }else{
                $('#listPatients').append(
                    '<tr>'+
                        '<td colspan="6" align="center">Sin Resultados<td>'+
                    '</tr>'
                );
            }
        });
    }


    function FormPatient() {
        $('#createPatient').modal('show');
        $('#TitleModal').html('Registrar');

        $('#BTNsave').show();
        $('#BTNedit').hide();
    }

    function createPatient() {

        $('#FormName').removeClass('border border-danger');
        $('#FormCI').removeClass('border border-danger');
        $('#FormDate').removeClass('border border-danger');
        $('#ciRegistered').hide();

        const FormName = $('#FormName').val();
        const FormCI = $('#FormCI').val();
        const FormDate = $('#FormDate').val();

        if (FormName == null || FormName == 0) {
            $('#FormName').addClass('border border-danger');
            return 0;
        }

        if (FormCI == null || FormCI == 0) {
            $('#FormCI').addClass('border border-danger');
            return 0;
        }

        if (FormDate == null || FormDate == 0) {
            $('#FormDate').addClass('border border-danger');
            return 0;
        }

        $.post('patients/store',{
            name: FormName,
            ci: FormCI,
            birth: FormDate,
            _token: '{{csrf_token()}}'
        }
        ,function (data) {
        })
       .fail(function(err){ 
          $('#ciRegistered').show().html(err.responseJSON.message);
        })
        .done(function(data) {
            $('#createPatient').modal('hide');
            $('#alertMSG').show().html(data.message);
            setTimeout(function(){ $('#alertMSG').fadeOut('slow');  }, 3000);
            getPatients();
        });
    }

    function editPatient(id) {
        $('#createPatient').modal('show');
        $('#TitleModal').html('Editar');
        
        $('#BTNsave').hide();
        $('#BTNedit').show();

        $.get("patients/"+id+"/getPatient/",function (data) {
        })
        .fail(function(err){ 
            console.log(err);
          $('#alertMSG2').show().html(err.responseJSON.message);
          setTimeout(function(){ $('#alertMSG2').fadeOut('slow');  }, 3000);
        })
        .done(function(data) {
            $('#FormId').val(data.id)
            $('#FormName').val(data.name);
            $('#FormCI').val(data.ci);
            $('#FormDate').val(data.birth);
        });

    }

    function UpdatePatient(id) {
        $('#FormName').removeClass('border border-danger');
        $('#FormCI').removeClass('border border-danger');
        $('#FormDate').removeClass('border border-danger');
        $('#ciRegistered').hide();

        const FormName = $('#FormName').val();
        const FormCI = $('#FormCI').val();
        const FormDate = $('#FormDate').val();
        const FormId = $('#FormId').val();

        if (FormName == null || FormName == 0) {
            $('#FormName').addClass('border border-danger');
            return 0;
        }

        if (FormCI == null || FormCI == 0) {
            $('#FormCI').addClass('border border-danger');
            return 0;
        }

        if (FormDate == null || FormDate == 0) {
            $('#FormDate').addClass('border border-danger');
            return 0;
        }

        $.post('patients/update',{
            id: FormId,
            name: FormName,
            ci: FormCI,
            birth: FormDate,
            _token: '{{csrf_token()}}'
        }
        ,function (data) {
        })
       .fail(function(err){ 
          $('#ciRegistered').show().html(err.responseJSON.message);
        })
        .done(function(data) {
            $('#createPatient').modal('hide');
            $('#alertMSG').show().html(data.message);
            setTimeout(function(){ $('#alertMSG').fadeOut('slow');  }, 3000);
            getPatients();
        });
    }

    function deletePatient(id){
        $.get("patients/"+id+"/delete",function (data) {
        })
        .fail(function(err){ 
            console.log(err);
          $('#alertMSG2').show().html(err.responseJSON.message);
          setTimeout(function(){ $('#alertMSG2').fadeOut('slow');  }, 3000);
        })
        .done(function(data) {
            $('#alertMSG').fadeIn(300).html(data.message);
            setTimeout(function(){ $('#alertMSG').fadeOut('slow');  }, 3000);
            getPatients();
        });
    }


    function viewFiles(id){
        $('#listFiles').empty();
        $('#viewFiles').modal('show');  

        $('#FormId').val(id);

        $.get("files/"+id+"/get",function (data) {
        })
        .fail(function(err){ 
        })
        .done(function(data) {
            if(data.length>0){
                for (var i = 0; i < data.length; i++) {
                    $('#listFiles').append(
                        '<div class="card text-white bg-danger mb-3" style="max-width: 100%; border-radius: 30px !important;">'+
                            '<div class="card-body">'+
                                '<div class="row">'+
                                    '<div class="col-md-12">'+
                                        '<a style="text-decoration: none;color: white;" href="storage/'+data[i].name+'" target="_blank">'+data[i].name+'</a>'+
                                        '<span style="float:right" onclick="deleteFiles('+data[i].id+')">X</span>'+
                                    '</div>'+
                                '<div>'+
                            '</div>'+
                        '</div>'
                    );
                }
            }else{
                $('#listFiles').append('<span style="color:black">Sin Resultados</span>');
            }
        });
    }

    // store
        $("#FormFile").on("change", function(e){

            e.preventDefault();
            var f = $(this);
            var formData = new FormData(document.getElementById("FormPatients"));
            const FormId = $('#FormId').val();
            formData.append('id',FormId);

            $.ajax( {
                headers: {
                    'X-CSRF-TOKEN': '{{csrf_token()}}'
                },
                url: "files/store",
                type: 'POST',
                dataType: "html",
                data: formData,
                processData: false,
                cache: false,
                contentType: false
            }).done(function(data){
                // console.log(data);
                $("#FormFile").empty();
                viewFiles(FormId);
            });

        });
    // });

    function deleteFiles(id) {

        var FormId = $('#FormId').val();

        $.get("files/"+id+"/delete",function (data) {
        })
        .fail(function(err){ 
            console.log(err);
          $('#alertMSG2').show().html(err.responseJSON.message);
          setTimeout(function(){ $('#alertMSG2').fadeOut('slow');  }, 3000);
        })
        .done(function(data) {
            $('#alertMSG').fadeIn(300).html(data.message);
            setTimeout(function(){ $('#alertMSG').fadeOut('slow');  }, 3000);
            viewFiles(FormId);
        });
    }



</script>
@endsection

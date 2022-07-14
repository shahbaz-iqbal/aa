@extends("layouts.app")

@section("style")
<link href="{{ asset('assets/plugins/Drag-And-Drop/dist/imageuploadify.min.css') }}" rel="stylesheet" />
@endsection

@section("wrapper")
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">

        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Update Cv</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Update Cv</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Update Cv</h5>
                <hr />
                <div class="form-body mt-4">
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="border border-3 p-4 rounded">
                                <form action="{{url('/admin/update_cv')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="<?php if (!empty($cv_tbl->id)) {
                                                                    echo $cv_tbl->id;
                                                                } ?>" name="id">
                                    <input type="hidden" value="{{$user_id}}" name="user_id">
                                    <div class="mb-3">
                                        <label for="inputProductTitle" class="form-label"> Name</label>
                                        <input type="text" class="form-control" name="name" id="inputProductTitle" placeholder="Name" value="<?php if (!empty($cv_tbl->name)) {
                                                                                                                                                    echo $cv_tbl->name;
                                                                                                                                                } ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputProductTitle" class="form-label"> Email</label>
                                        <input type="text" class="form-control" name="email" id="inputProductTitle" placeholder="Email" value="<?php if (!empty($cv_tbl->email)) {
                                                                                                                                                    echo $cv_tbl->email;
                                                                                                                                                } ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputProductTitle" class="form-label"> Phone</label>
                                        <input type="text" class="form-control" name="phone" id="inputProductTitle" placeholder="Phone" value="<?php if (!empty($cv_tbl->phone)) {
                                                                                                                                                    echo $cv_tbl->phone;
                                                                                                                                                } ?>">
                                    </div>
                                    <div class="card my-4 shadow">
                                        <div class="card-body">


                                            @if($cv_desc_tbl)
                                            @foreach($cv_desc_tbl as $cv_desc_tbl_key => $cv_desc_tbl_val)
                                            <div id="<?php echo 'dynamic-field-' . $cv_desc_tbl_key + 1; ?>" class="form-group dynamic-field">
                                                <label for="field" class="font-weight-bold">Short Description {{$cv_desc_tbl_key +1 }}</label>
                                                <input type="text" id="field" class="form-control" name="field[]" value="{{$cv_desc_tbl_val->description}}" />
                                            </div>
                                            @endforeach
                                            @else
                                            <div id="dynamic-field-1" class="form-group dynamic-field">
                                                <label for="field" class="font-weight-bold">Short Description 1</label>
                                                <input type="text" id="field" class="form-control" name="field[]" />
                                            </div>
                                            @endif

                                            <div class="clearfix mt-4">
                                                <button type="button" id="add-button" class="btn btn-secondary float-left text-uppercase shadow-sm"><i class="fas fa-plus fa-fw"></i> Add</button>
                                                @if($cv_desc_tbl)
                                                <button type="button" id="remove-button" class="btn btn-secondary float-left text-uppercase ml-1 shadow-sm"><i class="fas fa-minus fa-fw"></i> Remove</button>
                                                @else
                                                <button type="button" id="remove-button" class="btn btn-secondary float-left text-uppercase ml-1" disabled="disabled"><i class="fas fa-minus fa-fw"></i> Remove</button>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <label for="mytextarea"> Language</label> <br><br>
                                            <textarea id="mytextarea" name="description"><?php if (!empty($cv_tbl->description)) {
                                                                                                echo $cv_tbl->description;
                                                                                            } ?></textarea>

                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <label for="mytextarea"> Memberships</label> <br><br>
                                            <textarea id="mytextarea1" name="publication"><?php if (!empty($cv_tbl->publication)) {
                                                                                                echo $cv_tbl->publication;
                                                                                            } ?></textarea>

                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <label for="mytextarea"> Education  </label> <br><br>
                                            <textarea id="mytextarea2" name="membership"><?php if (!empty($cv_tbl->membership)) {
                                                                                                echo $cv_tbl->membership;
                                                                                            } ?></textarea>

                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <label for="mytextarea"> Quotes</label> <br><br>
                                            <textarea id="mytextarea3" name="quotes"><?php if (!empty($cv_tbl->quotes)) {
                                                                                            echo $cv_tbl->quotes;
                                                                                        } ?></textarea>

                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" name="file" id="inputGroupFile02">
                                        <input type="hidden" name="old_file" value="<?php if (!empty($cv_tbl->image)) {
                                                                                        echo $cv_tbl->image;
                                                                                    } ?>">
                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                    </div>

                                    <h2>Practice Areas</h2>
                                    <input type="hidden" id="url" value="{{url('/')}}">
                                    <div class="mb-3">
                                        <label for="mytextarea">Category</label> <br><br>
                                        <select class="form-control" name="practice_category" id="practice_category">
                                            <option>Select Category</option>
                                            @if($categorys)
                                            @foreach($categorys as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                    </div>


                                   


                                    <div id="append_category">
                                    @if($cv_practice_tbl)
                                    @foreach($cv_practice_tbl as $cv_practice_tbl_key => $cv_practice_tbl_val)
                                    <div class="card" id="usernotebox<?php echo $cv_practice_tbl_val->practice_category_id; ?>">
                                        <div class="card-body">
                                            <a href="javascript:removeusernote(<?php echo $cv_practice_tbl_val->practice_category_id; ?>);" class="btn btn-danger">remove</a>
                                            <input type="hidden" name="practice_category_id[]" value="{{$cv_practice_tbl_val->practice_category_id}}">
                                            <label for="mytextarea"> {{$cv_practice_tbl_val->category['name']}}</label> <br><br>
                                            <textarea class="practice_textarea_class" id="<?php echo 'practice' . $cv_practice_tbl_val->practice_category_id ?>" name="practices[]">{{$cv_practice_tbl_val->description}}</textarea>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-light">Save Slide</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </div>
        </div>

    </div>
</div>
<!--end page wrapper -->
@endsection

@section("script")



<script src="{{ asset('assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js') }}"></script>

<script>
    $(document).ready(function() {
        $('#image-uploadify').imageuploadify();
    })
</script>

<script src="{{ asset('assets/js/tinymce.min.js') }}"></script>

<script>
    $(document).ready(function() {
        $('#practice_category').change(function() {
            var cat_id = $('#practice_category').val();
            var base_url = $('#url').val();
            var url = base_url + '/' + 'admin/get_category' + '/' + cat_id;
            $.ajax({
                type: "GET",
                url: url,
                success: function(Obj) {
                    var response = JSON.parse(Obj);
                    // $("#usernotebox" + response.id).show();
                    var tinymce_id = 'practice' + response.id;
                    var value = $('#' + tinymce_id).val();
                    if (!value) {
                        $("#append_category").append('<div class="card" id="usernotebox' + response.id + '"><div class="card-body"> <a href="javascript:removeusernote(' + response.id + ');" class="btn btn-danger">remove</a><input type="hidden" name="practice_category_id[]" value="' + response.id + '"><label for="mytextarea"> ' + response.name + '</label> <br><br><textarea id="' + 'practice' + response.id + '" name="practices[]">Practices</textarea> </div></div>');
                        
                        tinymce.init({
                            
                            selector: '#' + tinymce_id,
                        });
                    }
                }
            });
        });
    });
</script>
<script type='text/javascript'>
    $.each($('.practice_textarea_class'), function() {
        $this = $(this);
        tinymce.init({
            selector: "#" + $this.attr('id'),
        });
    });
</script>
<script>
    tinymce.init({
        selector: '#mytextarea',
    });
</script>
<script>
    tinymce.init({
        selector: '#mytextarea1',
    });
</script>
<script>
    tinymce.init({
        selector: '#mytextarea2',
    });
</script>
<script>
    tinymce.init({
        selector: '#mytextarea3',
    });
</script>



<script>
    $(document).ready(function() {
        var buttonAdd = $("#add-button");
        var buttonRemove = $("#remove-button");
        var className = ".dynamic-field";
        var count = 0;
        var field = "";
        var maxFields = 5;

        function totalFields() {
            return $(className).length;
        }

        function addNewField() {
            count = totalFields() + 1;
            field = $("#dynamic-field-1").clone();
            field.attr("id", "dynamic-field-" + count);
            field.children("label").text("Short Description " + count);
            field.find("input").val("");
            $(className + ":last").after($(field));
        }

        function removeLastField() {
            if (totalFields() > 1) {
                $(className + ":last").remove();
            }
        }

        function enableButtonRemove() {
            if (totalFields() === 2) {
                buttonRemove.removeAttr("disabled");
                buttonRemove.addClass("shadow-sm");
            }
        }

        function disableButtonRemove() {
            if (totalFields() === 1) {
                buttonRemove.attr("disabled", "disabled");
                buttonRemove.removeClass("shadow-sm");
            }
        }

        function disableButtonAdd() {
            if (totalFields() === maxFields) {
                buttonAdd.attr("disabled", "disabled");
                buttonAdd.removeClass("shadow-sm");
            }
        }

        function enableButtonAdd() {
            if (totalFields() === (maxFields - 1)) {
                buttonAdd.removeAttr("disabled");
                buttonAdd.addClass("shadow-sm");
            }
        }

        buttonAdd.click(function() {
            addNewField();
            enableButtonRemove();
            disableButtonAdd();
        });

        buttonRemove.click(function() {
            removeLastField();
            disableButtonRemove();
            enableButtonAdd();
        });
    });
</script>

<script>
    function removeusernote(id) {
        // console.log("#usernotebox" + id);
        // // $(this).closest("div").remove();
        // tinymce.remove("#usernotebox" + id);
        tinymce.remove("#practice" + id);
        // tinymce.EditorManager.execCommand('mceRemoveControl',true, "usernotebox" + id);
        $("#usernotebox" + id).remove();
        // // document.getElementById("div #usernotebox" + id).remove();
        // console.log(("#usernotebox" + id));

        // $("#usernotebox" + id).hide();
    }
    // $(".remove_practice").click(function() {
    //     $(this).parent().parent().removeClass('card');
    //     alert($(this).parent().parent().remove());
    //     // console.log($(this).closest("div"));
    //     // $(this).closest("div").remove();

    // });
</script>
@endsection
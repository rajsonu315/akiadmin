<?php include('../header.php'); ?>


<style>
    .selectbox li button:focus {
        background: rgba(255, 255, 150, .75)
    }

    .selectbox ul {
        padding: 0;
        margin-top: -10px;
        height: 200px;
        overflow: scroll;
        border: 1px solid #ccc;
        background: #f4f4f4;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
        box-shadow: inset 0 3px 6px rgba(0, 0, 0, .1)
    }

    .selectbox li,
    .selectbox li button {
        display: block;
        width: 100%;
        text-align: left;
        margin: 0;
        background: #fff;
    }

    .selectbox li {
        border-top: 1px solid #eee;
        padding: 3px 0;
        box-shadow: 0 3px 4px rgba(0, 0, 0, .1)
    }

    .selectbox li.active {
        padding-left: 10px;
        position: relative;
        background: rgba(0, 0, 0, .2)
    }

    /* .selectbox .all li.active:before{
	content: '\2713';
	position: absolute;
	left: 5px;
	color: #888
}
.selectbox .selected li.active:before{
	content: '\2713';
	position: absolute;
	left: 5px;
	color: #888	
} */

    .selectbox li:hover {
        background: #eee
    }

    select[multiple] {
        width: 50%;
        height: 20rem;
    }

    .selectbox li button {
        border: none;
        background: none;
    }

    .selectbox .filter-bar {
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        border: 1px solid rgba(0, 0, 0, .2);
        padding: 0 6px;
    }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .btn {
        border: 1px solid #b69c6f;
    }
</style>

<script>
    var demo1 = $('select[name="duallistbox_demo1[]"]').bootstrapDualListbox();
    $("#demoform").submit(function() {
        alert($('[name="duallistbox_demo1[]"]').val());
        return false;
    });
</script>
<div class="page-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Create</li>
                    </ol>
                </nav>
            </div>

        </div>
        <div class="card">
            <div class="card-body p-4">
                <div class="row mb-3">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="mb-1"><b>Type of Salesman </b></label>
                            <select class="form-select">

                                <option value="">Test</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="mb-1"><b>Select salesman</b></label>
                            <select class="form-select">

                                <option value="">Test</option>
                            </select>
                        </div>
                    </div>




                </div>

                <div class="row mb-3">
                    <h5><b>Allocate Customer</b></h5>
                    <!-- <div class="col-md-2">
                        <div class="form-group mt-2">
                            <label class="mb-1"><b>Customer Number</b></label>
                             <select class="form-select">

                                <option value="">Test</option>
                            </select>
                        </div>
                    </div> -->
                    <div class="col-md-3">
                        <div class="form-group mt-2">
                            <label class="mb-1"><b>Sales Channel</b></label>
                            <select class="form-select">

                                <option value="">Test</option>
                            </select>
                        </div>
                    </div>
                    <!-- <div class="col-md-2">
                        <div class="form-group mt-2">
                            <label class="mb-1"><b>Terriotory Name</b></label>
                             <select class="form-select">

                                <option value="">Test</option>
                            </select>
                        </div>
                    </div> -->
                    <div class="col-md-3">
                        <div class="form-group mt-2">
                            <label class="mb-1"><b>Terriotory Segment1</b></label>
                            <select class="form-select">

                                <option value="">Test</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mt-2">
                            <label class="mb-1"><b>Terriotory Segment2</b></label>
                            <select class="form-select">

                                <option value="">Test</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mt-2">
                            <label class="mb-1"><b>Terriotory Segment3</b></label>
                            <select class="form-select">

                                <option value="">Test</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class='selectbox'>
                            <div class='row'>
                                <div class='col-sm-6'>
                                    <div class="d-flex justify-content-between">


                                        <div class='filter-group'>
                                            <label class='form-label'>
                                                <input type='text' placeholder="Search ...." class='form-control action' data-action='filter-all' /></label>
                                        </div>
                                        <div class='filter-group'>
                                            <button class='action btn btn btn-warning px-5 btn-sm single-add' data-action='add'>Add</button>
                                            <button class='action btn btn btn-warning px-5 btn-sm add-all-button' class="" data-action='add-all' >Add All</button>

                                        </div>
                                    </div>


                                    <div class="d-flex justify-content-between pb-2">
                                        <!-- <input type="checkbox" name="" class="form-check" value="SelectAll" id="selectAllCheckbox"> -->
                                        <li>SKU ID</li>
                                        <li>SKU Name</li>
                                    </div>

                                    <ul class="all" tabindex="0"></ul>
                                </div>
                                <div class='col-sm-6'>
                                    <div class='d-flex justify-content-between'>
                                        <div class='filter-group'>
                                            <label class='form-label'>
                                                <input type='text' placeholder="Search ...." class='form-control action' data-action='filter-selected' /></label>
                                        </div>
                                        <div class='filter-group'>
                                            <button class='action btn btn btn-warning px-5 btn-sm single-remove' data-action='remove'>Remove</button>
                                            <button class='action btn btn btn-warning px-5 btn-sm remove-all-button' data-action='remove-all' >Remove All</button>
                                        </div>

                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <!-- <input type="checkbox" name="" class="form-check" value="SelectedAll" id="selectedAllCheckbox"> -->


                                        <li>SKU ID</li>
                                        <li>SKU Name</li>


                                    </div>
                                    <ul class="selected" tabindex="0"></ul>
                                </div>
                            </div>

                            <select multiple class="d-none">
                                <!-- Required meta tags -->

                                <option value="AL">
                                    Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>

                            </select>
                        </div>
                    </div>
                </div>

                <hr />
                <div class="row mb-3">
                    <h5><b>Allocate Item</b></h5>
                    <!-- <div class="col-md-3">
                        <div class="form-group mt-2">
                            <label class="mb-1"><b>Item</b></label>
                             <select class="form-select">

                                <option value="">Test</option>
                            </select>
                        </div>
                    </div> -->
                    <div class="col-md-3">
                        <div class="form-group mt-2">
                            <label class="mb-1"><b>Brand</b></label>
                            <select class="form-select">

                                <option value="">Test</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mt-2">
                            <label class="mb-1"><b>Category 1</b></label>
                            <select class="form-select">

                                <option value="">Test</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mt-2">
                            <label class="mb-1"><b>Category 2</b></label>
                            <select class="form-select">

                                <option value="">Test</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mt-2">
                            <label class="mb-1"><b>Category 3</b></label>
                            <select class="form-select">

                                <option value="">Test</option>
                            </select>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class='selectbox'>
                            <div class='row'>
                                <div class='col-sm-6'>
                                    <div class="d-flex justify-content-between">


                                        <div class='filter-group'>
                                            <label class='form-label'>
                                                <input type='text' placeholder="Search ...." class='form-control action' data-action='filter-all' /></label>
                                        </div>
                                        <div class='filter-group'>
                                            <button class='action btn btn btn-warning px-5 btn-sm single-add' data-action='add'>Add</button>
                                            <button class='action btn btn btn-warning px-5 btn-sm add-all-button' class="" data-action='add-all' >Add All</button>

                                        </div>
                                    </div>


                                    <div class="d-flex justify-content-between pb-2">
                                        <!-- <input type="checkbox" name="" class="form-check" value="SelectAll" id="selectAllCheckbox"> -->
                                        <li>Customer Number</li>
                                        <li>Customer Name</li>
                                    </div>

                                    <ul class="all" tabindex="0"></ul>
                                </div>
                                <div class='col-sm-6'>
                                    <div class='d-flex justify-content-between'>
                                        <div class='filter-group'>
                                            <label class='form-label'>
                                                <input type='text' placeholder="Search ...." class='form-control action' data-action='filter-selected' /></label>
                                        </div>
                                        <div class='filter-group'>
                                            <button class='action btn btn btn-warning px-5 btn-sm single-remove' data-action='remove'>Remove</button>
                                            <button class='action btn btn btn-warning px-5 btn-sm remove-all-button' data-action='remove-all' >Remove All</button>
                                        </div>

                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <!-- <input type="checkbox" name="" class="form-check" value="SelectedAll" id="selectedAllCheckbox"> -->


                                        <li>Customer Number</li>
                                        <li>Customer Name</li>


                                    </div>
                                    <ul class="selected" tabindex="0"></ul>
                                </div>
                            </div>

                            <select multiple class="d-none">
                                <!-- Required meta tags -->

                                <option value="AL">
                                    Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>

                            </select>
                        </div>
                    </div>
                </div>

                <div class="ms-auto d-flex gap-2 mt-2">
                    <div class="">
                        <a href="" class="href">
                            <button type="button" class="btn btn-warning px-5"></i>Download Current Mapping</button>
                        </a>
                    </div>
                    <div class="">
                        <a href="" class="href">
                            <button type="button" class="btn btn-warning px-5"></i>Upload New Mapping</button>
                        </a>
                    </div>
                </div>

                <div class="ms-auto d-flex justify-content-end gap-2 mt-3">
                    <div class="">
                        <a href="" class="href">
                            <button type="button" class="btn btn-warning px-5"></i>Cancel</button>
                        </a>
                    </div>
                    <div class="">
                        <a href="" class="href">
                            <button type="button" class="btn btn-warning px-5"></i>Submit</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../footer.php'); ?>

<script>
    var CreateList = function(box, what, status) {
        var results = ""
        for (var i in what) {
            var myValue = what[i]
            var myName = $(box).find('option[value="' + myValue + '"]').text() || myValue
            var datatitle = myName.toLowerCase();
            var datavalue = myValue.toLowerCase();
            results += (`


		<div class="d-flex justify-content-between">
		<li data-title="` + datatitle + `" data-value="` + datavalue + `" value="` + myValue + `" data-status="` + status + `">
		<button class="selectButton"><i class="fa fa-square-o" aria-hidden="true"></i>
		` + myName + `</button></li>
		
		
		<li >
		<button >Customber Name</button></li>
		
		
		
		</div>


		
		`)
        }
        return results
    }









    $('.selectbox').each(function(i) {






        var data = $(this).find('select')

        console.log("data", data);

        var all = $(this).find('.all')
        var selected = $(this).find('.selected')
        var selectBox = $(this)

        var moveItem = function(me, added) {
            var myValue = $(me).parent().attr('value')

            var vals = data.val()


            if (!added) { // item hasnt been selected yet
                vals.push(myValue)
                data.val(vals)
            } else { // lets remove the item from the selected list
                for (var i in vals) {
                    if (vals[i] == myValue) {
                        vals[i] = null;
                    }
                }
                data.val(vals)
            }
        }

        var filterAll = $(this).find('.action[data-action="filter-all"]')
        var filterSelected = $(this).find('.action[data-action="filter-selected"]')

        var filterList = function(who, what) {
            var val = what.toLowerCase()
            if (val) {
                $(who).find('li').removeClass('active').hide()
                $(who).find('li[data-title*="' + val + '"]').show()
                $(who).find('li[data-value*="' + val + '"]').show()

            } else {
                $(who).find('li').removeClass('active').show()
            }
        }

        $(filterSelected).on('input', function() {
            filterList(selected, $(this).val())
        })

        $(filterAll).on('input', function() {
            filterList(all, $(this).val())
        })


        var updateList = function() {
          //  $('#selectedAllCheckbox').prop('checked', false);
          //  $('#selectAllCheckbox').prop('checked', false);


            var updateTabIndex = function(who, me) {
                var tabIndex = who.find('.selectButton')
                var index = tabIndex.index(me);
                updateList()
                $(who.find('.selectButton')[index]).focus();
            }


            selected.html(CreateList(selectBox, data.val(), 'added'))

            var aa = []
            data.find("option:not(:selected)").each(function() {
                aa.push($(this).attr('value') || $(this).text())
            })

            all.html(CreateList(selectBox, aa, ''))

            var mousedown = false
            var active = false

            //var addButton = $('.add-all-button');
           // var removeallButton = $('.remove-all-button');

          //  var single_add = $('.single-add');
           // var single_remove = $('.single-remove');


            $('#selectAllCheckbox').on('change', function() {
                var isChecked = $(this).is(':checked');

                // Your code based on the checkbox value
                if (isChecked) {
                    $('.all li').addClass('active');
                    $('.all .selectButton i').removeClass('fa-square-o').addClass('fa-check-square-o');
                    //addButton.prop('disabled', false); // Enable the button


                } else {
                    $('.all li').removeClass('active');
                    $('.all .selectButton i').removeClass('fa-check-square-o').addClass('fa-square-o');
                  //  addButton.prop('disabled', true); // Enable the button

                }
            });

            $('#selectedAllCheckbox').on('change', function() {
                var isChecked = $(this).is(':checked');

                // Your code based on the checkbox value
                if (isChecked) {
                    $('.selected li').addClass('active');
                    $('.selected .selectButton i').removeClass('fa-square-o').addClass('fa-check-square-o');

                  //  removeallButton.prop('disabled', false); // Enable the button
                } else {
                    $('.selected li').removeClass('active');
                    $('.selected .selectButton i').removeClass('fa-check-square-o').addClass('fa-square-o');

                   // removeallButton.prop('disabled', true); // Enable the button
                }
            });



            selectBox.find('.selectButton').on('mousedown', function(e) {
                mousedown = true
                active = $(this).parent().hasClass('active')


            })

            selectBox.find('.selectButton').on('mouseup', function(e) {
                mousedown = false

                var icon = $(this).find('i');





                if (active) {
                    $(this).parent().removeClass('active')
                    icon.removeClass('fa-check-square-o');
                    icon.addClass('fa-square-o');

                    //add html icon 
                } else {
                    $(this).parent().addClass('active')
                    icon.removeClass('fa-square-o');
                    icon.addClass('fa-check-square-o');


                    //;add html icon 
                }
            })

            selectBox.on('mouseup', function(e) {
                mousedown = false
            })

            selectBox.find('.selectButton').on('mousemove', function(e) {
                if (mousedown) {
                    if (active) {
                        $(this).parent().removeClass('active')
                    } else {
                        $(this).parent().addClass('active')
                    }
                }
            })

            selectBox.find('.selectButton').on('keydown', function(e) {
                var key = e.keyCode;
                var added = $(this).parent().data('status')

                if (key == 9) { // no need to replicate the tab key
                    return
                }
                e.preventDefault()
                var tabIndex
                // which list should we be pulling from
                if (added) {
                    tabIndex = selected.find('.selectButton')
                } else {
                    tabIndex = all.find('.selectButton')
                }

                // find the index of the current item
                var index = tabIndex.index(this);

                //lets move down the list
                if (key == 40 || key == 39) {
                    $(tabIndex[index + 1]).focus();
                }
                //lets move up the list
                if (key == 37 || key == 38) {
                    $(tabIndex[index - 1]).focus();
                }

                if (key == 32 || key == 13) {
                    if (e.shiftKey) {
                        $(this).parent().toggleClass('active')
                    } else {
                        moveItem(this, added)
                        updateList()
                        // AHHH! because we've updated the displays all our indexes are new, we need to find the old to make a new
                        if (added) {
                            tabIndex = selected.find('.selectButton')
                        } else {
                            tabIndex = all.find('.selectButton')
                        }
                        if (index >= tabIndex.length) {
                            index = tabIndex.length - 1
                        }
                        $(tabIndex[index]).focus();
                    }
                }
            })
            filterList(selected, $(filterSelected).val())
            filterList(all, $(filterAll).val())
        }

        updateList()

        $(this).find('.action[data-action="add"]').on('click', function() {
            $(all).find('li.active button:visible').each(function() {
                moveItem(this, false);


            })
            updateList()
        })

        $(this).find('.action[data-action="remove"]').on('click', function() {
            $(selected).find('li.active button:visible').each(function() {
                moveItem(this, true);


            })
            updateList()
        })

        $(this).find('.action[data-action="add-all"]').on('click', function() {
            $(all).find('li button:visible').each(function() {
                moveItem(this, false);


            })
           // $('.add-all-button').prop('disabled', !$(this).prop('checked'));

            updateList()
        })

        $(this).find('.action[data-action="remove-all"]').on('click', function() {
            $(selected).find('li button:visible').each(function() {
                moveItem(this, true)
            })
           // $('.remove-all-button').prop('disabled', !$(this).prop('checked'));
            updateList()
        })


        data.on('change', function() {

            updateList()
        })
        filterList(selected, $(filterSelected).val())
        filterList(all, $(filterAll).val())
    })
</script>
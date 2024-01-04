<?php include('./header.php'); ?>

<style>
    /* .dual-list .list-group {
        margin-top: 8px;
    } */

    .list-left li,
    .list-right li {
        cursor: pointer;
    }

    /* .list-arrows {
        padding-top: 100px;
    } */

    /* .list-arrows button {
        margin-bottom: 20px;
    }  */
</style>

<style>
    .form-search {
        display: block;
        width: 100%;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border-radius: 0.375rem;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;

    }

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
        padding: 8px 4px;
        box-shadow: 0 3px 4px rgba(0, 0, 0, .1)
    }

    .selectbox li.active {
        padding-left: 10px;
        position: relative;
        background: rgb(182 156 111);
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
    // var demo1 = $('select[name="duallistbox_demo1[]"]').bootstrapDualListbox();
    // $("#demoform").submit(function() {
    //     alert($('[name="duallistbox_demo1[]"]').val());
    //     return false;
    // });
</script>
<div class="page-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="#"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Create</li>
                    </ol>
                </nav>
            </div>

        </div>
        <div class="card">
            <div class="card-body p-4">
                <form id="formid" action="#" method="post" class="needs-validation" novalidate>


                    <div class="row mb-3">
                        <h5><b> Customer Group</b></h5>

                        <div class="col-md-3">
                            <div class="form-group mt-2">
                                <label for="Channel" class="mb-1"><b>Sales Channel</b></label>
                                <select class="form-select" required id="Channel_" name="Channel_">
                                <option selected disabled value>Please Select</option>


                                    <option value="">Test</option>
                                </select>
                                <div class="invalid-feedback">
                                    this field is required
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group mt-2">
                                <label for="Segment1" class="mb-1"><b>Terriotory Segment1</b></label>
                                <select class="form-select" required id="Segment1" name="Segment1_">
                                <option selected disabled value>Please Select</option>


                                    <option value="">Test</option>
                                </select>
                                <div class="invalid-feedback">
                                    this field is required
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mt-2">
                                <label for="Segment2_" class="mb-1"><b>Terriotory Segment2</b></label>
                                <select class="form-select" required id="Segment2_">
                                <option selected disabled value>Please Select</option>


                                    <option value="">Test</option>
                                </select>
                                <div class="invalid-feedback">
                                    this field is required
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mt-2">
                                <label for="Segment3" class="mb-1"><b>Terriotory Segment3</b></label>
                                <select class="form-select" required id="Segment3">

                                    <option value="">Test</option>
                                </select>
                                <div class="invalid-feedback">
                                    this field is required
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mt-2">
                                <label for="Segment3" class="mb-1"><b>Group Name</b></label>
                                <input type="text" class="form-control" required>
                                <div class="invalid-feedback">
                                    this field is required
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class='selectbox'>


                                <div class='row'>
                                    <div class='col-sm-6'>

                                        <div class="dual-list Customerlist-left col-md-12">
                                            <div class="well text-right">
                                                <div class="row">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="btn-group">
                                                                <a class="btn btn-warning px-4 flex-shrink-0 btn-sm btn-default selectorCustomer" title="select all"></i>select all</a>
                                                                <div class='filter-group d-flex align-items-center'>

                                                                    <div class="list-arrowsone col-md-1 text-center">
                                                                        <button type="button" class=" action btn btn btn-warning px-4 flex-shrink-0 btn-sm btn btn-default btn-sm move-right_click">
                                                                            Add
                                                                        </button>



                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class='d-flex'>
                                                                <div class='filter-group'>
                                                                    <label for="search_" class='form-label'>
                                                                        <input type="text" id="search_" name="SearchDualList" class="form-search" data-action='filter-selected' placeholder="search" />
                                                                </div>


                                                            </div>
                                                        </div>

                                                    </div>



                                                </div>
                                                <div class="d-flex justify-content-between pb-2">
                                                    <!-- <input type="checkbox" name="" class="form-check" value="SelectAll" id="selectAllCheckbox"> -->
                                                    <li>Customer Code</li>
                                                    <li>Customer Name</li>
                                                </div>


                                                <ul class="Customer_Code" id="AllocateItem">



                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='col-sm-6'>

                                        <div class="dual-list Customerlist-right col-md-12">
                                            <div class="well">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="btn-group">
                                                            <a class="btn btn-warning px-4 flex-shrink-0 btn-sm btn-default selectorCustomer" title="select all"></i>select all</a>
                                                            <div class='filter-group d-flex align-items-center'>

                                                                <div class="list-arrowsone col-md-1 text-center">
                                                                    <button class="action btn btn btn-warning px-4 flex-shrink-0 btn-sm btn btn-default btn-sm move-left_click">
                                                                        Remove
                                                                    </button>



                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class='d-flex'>
                                                            <div class='filter-group'>
                                                                <input type="text" name="SearchDualList" class="form-search" placeholder="search" />

                                                            </div>


                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="d-flex justify-content-between pb-2">
                                                    <!-- <input type="checkbox" name="" class="form-check" value="SelectAll" id="selectAllCheckbox"> -->
                                                    <li>Customer Code</li>
                                                    <li>Customer Name</li>
                                                </div>
                                                <ul class="Customer_Code" id="list-left">
                                                    <!-- Add more list items with unique names as needed -->

                                                    <li class="Customer_Code-item active" data-item-id="77">
                                                        DPH
                                                        <span class="badge btn-warning  rounded-pill bx-pull-right">77</span>
                                                    </li>

                                                    <li class="Customer_Code-item active" data-item-id="77">
                                                        DPH
                                                        <span class="badge btn-warning  rounded-pill bx-pull-right">77</span>
                                                    </li>

                                                </ul>





                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-warning px-5  bx-pull-right">Create </button>


                </form>





            </div>
        </div>
    </div>
</div>

<?php include('./footer.php'); ?>


<script>
    const jsonData = {
        "status": true,
        "message": "Category Detail",
        "result": [{
                "id": 77,
                "parent_id": 1,
                "channel_id": 1,
                "name": "DPH",
                "description": "DPH",
                "slug": "dph"
            },
            {
                "id": 173,
                "parent_id": 16,
                "channel_id": 1,
                "name": "FACE CARE",
                "description": "FACE CARE",
                "slug": "face-care"
            },
            {
                "id": 184,
                "parent_id": 15,
                "channel_id": 1,
                "name": "PROTEIN SNACK",
                "description": "PROTEIN SNACK",
                "slug": "protein-snack"
            },
            {
                "id": 176,
                "parent_id": 19,
                "channel_id": 1,
                "name": "BABY CARE",
                "description": "BABY CARE",
                "slug": "baby-care"
            },
            {
                "id": 218,
                "parent_id": 28,
                "channel_id": 1,
                "name": "PERSONAL CARE",
                "description": "PERSONAL CARE",
                "slug": "personal-care"
            },
        ]
    };

    // Create HTML for each item
    const html = jsonData.result.map(item => `
            <li class="Customer_Code-item" data-item-id="${item.id}">
                ${item.name}
                <span class="badge btn-warning  rounded-pill bx-pull-right">${item.id}</span>
            </li>
        `).join('');

    // Append HTML to the list
    document.querySelector('.Customer_Code').innerHTML = html;
</script>



<script>
    function getListValues(itemSelector) {
        return $(itemSelector).map(function() {
            return $(this).data('item-id');
        }).get();
    }

    // Wait for the document to be ready
    $('#formid').on('submit', function(e) {
        e.preventDefault(); // Prevent the default form submission

        // Get values from left and right lists
        var leftDataItemIds = getListValues(".list-left ul li");
        var rightDataItemIds = getListValues(".list-right ul li");

        var leftDataItemIdsCustomer = getListValues(".Customerlist-left ul li", 'item-id');
        var rightDataItemIdsCustomer = getListValues(".Customerlist-right ul li", 'item-id');


        var formData = {};

        // // Collect input values
        // $('input').each(function() {
        //     formData[$(this).attr('name')] = $(this).val();
        // });

        // Collect select values
        $('select').each(function() {
            formData[$(this).attr('name')] = $(this).val();
        });

        var allData = {
            AllocateItem: rightDataItemIds,
            AllocateCustomer: rightDataItemIdsCustomer,
            formData: formData
        };

        // Log the combined JSON object
        console.log('All Data:', JSON.stringify(allData));

        // Additional processing or AJAX request can be added here
    });
</script>
<link rel="stylesheet" type="text/css" href="<?= $ABS_ROOT_PATH ?>/styles/home_search.css">

<h3 class="title">Generate  Medical Report</h3>
<p class="description">Look up patient information by filling out the following fields</p>


<form class="search-form container p-3" onsubmit="return false;">
    <div class="row">
        <div class="form-group col-12">
            <label class="control-label" for="full_name">Full name</label>
            <input type="text" id="full_name" name="full_name" class="form-control">
        </div>
    </div>


    <div class="row">
        <div class="form-group col-6">
            <label class="control-label" for="phone">Phone number</label>
            <input type="tel" id="phone" name="phone" class="form-control"
            pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="xxx-xxx-xxxx">
        </div>

        <div class="form-group col-6">
            <label class="control-label" for="admission_date">Admission date</label>
            <input type="date" id="admission_date" name="admission_date" class="form-control" placeholder="YYYY-MM-DD">
        </div>  
    </div>


    <div class="row">
        <div class="form-group col-6">
            <label class="control-label" for="identity_number">Identity number</label>
            <input type="text" id="identity_number" name="identity_number" class="form-control"
            pattern="[0-9]{12}" placeholder="xxxxxxxxxxxx">
        </div>

        <div class="form-group col-6">
            <label class="control-label" for="report_type">Report type</label>
            <select id="report_type" name="report_type" class="form-select form-control">
                <option selected value="general">General report (demographics + comorbidities)</option>
                <option value="testing">Testing report (demographics + comorbidities + testing results)</option>
                <option value="full">Full report (all recorded information)</option>
            </select>
        </div>
    </div>

    <br>

    <button class="btn">Search</button>
</form>

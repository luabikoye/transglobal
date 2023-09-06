<div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <!-- <h3 class="box-title">Basic Table</h3> -->
                            <!-- <p class="text-muted">Add class <code>.table</code></p> -->
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">id</th>
                                            <th class="border-top-0">First Name</th>
                                            <th class="border-top-0">Last Name</th>
                                            <th class="border-top-0">email</th>
                                            <th class="border-top-0">Phone</th>
                                            <th class="border-top-0">Exam_code</th>
                                            <th class="border-top-0">Expire_date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Deshmukh</td>
                                            <td>Prohaska</td>
                                            <td>@Genelia</td>
                                            <td>admin</td>
                                            <td>admin</td>
                                            <td>admin</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Deshmukh</td>
                                            <td>Gaylord</td>
                                            <td>@Ritesh</td>
                                            <td>member</td>
                                            <td>member</td>
                                            <td>member</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Sanghani</td>
                                            <td>Gusikowski</td>
                                            <td>@Govinda</td>
                                            <td>developer</td>
                                            <td>developer</td>
                                            <td>developer</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Roshan</td>
                                            <td>Rogahn</td>
                                            <td>@Hritik</td>
                                            <td>supporter</td>
                                            <td>supporter</td>
                                            <td>supporter</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Joshi</td>
                                            <td>Hickle</td>
                                            <td>@Maruti</td>
                                            <td>member</td>
                                            <td>member</td>
                                            <td>member</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Nigam</td>
                                            <td>Eichmann</td>
                                            <td>@Sonu</td>
                                            <td>supporter</td>
                                            <td>supporter</td>
                                            <td>supporter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="col-md-7 col-sm-12">

<form action="proc-thought-leadership.php" method="post" enctype="multipart/form-data">
<div class="form-group input-group">
<span class="input-group-addon">Document Title</span>
<input name="title" type="text" class="form-control" placeholder="Title" required="required">
</div>

<div class="form-group input-group">
<span class="input-group-addon">Date Published</span>

<select name="date_mm" class="form-control" style="width:100px;" required="required">
    <option value="">Choose Month</option>
    <option>January</option>
    <option>February</option>
    <option>March</option>
    <option>April</option>
    <option>May</option>
    <option>June</option>
    <option>July</option>
    <option>August</option>
    <option>September</option>
    <option>October</option>
    <option>November</option>
    <option>December</option>
</select>

<input name="date_yy" type="text" class="form-control" placeholder="2021" required="required" style="width:100px;">
</div>

<div class="form-group input-group">
<span class="input-group-addon">Upload Document</span>
<input name="doc_file" type="file" class="form-control">
</div>

<div class="form-group input-group">
<span class="input-group-addon">Upload Image Cover</span>
<input name="image_file" type="file" class="form-control">
</div>

<div class="form-group input-group">
<input type="submit" class="btn btn-primary" value="Submit">
</div>

</form>
</div>
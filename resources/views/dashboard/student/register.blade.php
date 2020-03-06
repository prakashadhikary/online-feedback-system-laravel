@include('dashboard.admin.header')

<div class="page-wrapper  page-container3">
            <div class="page-content">
                <div class="container">
                    <div class="login-wrap">
                        <div class="login-content">
                            <div class="login-logo">
                                <div class="h4 text-danger">Student Registration Form</div>
                            </div>
                            <div class="login-form">
                                <form action="{{route('student.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input class="au-input au-input--full" type="text" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input class="au-input au-input--full" type="email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="au-input au-input--full" type="password" name="password">
                                    </div>
                                    <div class="form-group">
                                        <label>Mobile</label>
                                        <input class="au-input au-input--full" type="text" name="phone">
                                    </div>
                                    <div class="form-group">
                                        <label>Programme</label>
                                        <select name="programme" class="form-control">
                                            <option>BIM</option>
                                            <option>BCA</option>
                                            <option>BBA</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Semester</label>
                                        <select name="semester" class="form-control">
                                            <option>I</option>
                                            <option>II</option>
                                            <option>III</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <input type="radio" name="gender" value="Male"> Male
                                        <input type="radio" name="gender" value="Female"> Female
                                    </div>
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <input type="date" name="dob" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Upload Image</label>
                                        <input type="file" name="image">
                                    </div>
                                    <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">register</button>
                                </form>
                                <div class="register-link">
                                    <p>
                                        Already have account?
                                        <a href="">Sign In</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

@include('dashboard.admin.footer');
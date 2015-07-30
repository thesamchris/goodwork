{% extends 'templates/default.php' %}

{% block title %}Update profile{% endblock %}

{% block content %}
  <div class="container">
    <div class="container">
      <form action="{{ urlFor('account.profile.post') }}" method="post">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{{ request.post('email') ? request.post('email') : auth.email }}">
          {% if errors.has('Email') %} <div class="alert alert-danger" role="alert"><strong>Oops! </strong>{{ errors.first('Email') }}</div> {% endif %}
        </div>
        <div class="form-group">
          <label for="first_name">First name</label>
          <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name" value="{{ request.post('first_name') ? request.post('first_name') : auth.first_name }}">
          {% if errors.has('First name') %} <div class="alert alert-danger" role="alert"><strong>Oops! </strong>{{ errors.first('First name') }}</div> {% endif %}
        </div>
        <div class="form-group">
          <label for="last_name">Last name</label>
          <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name" value="{{ request.post('last_name') ? request.post('last_name') : auth.last_name }}">
          {% if errors.has('Last name') %} <div class="alert alert-danger" role="alert"><strong>Oops! </strong>{{ errors.first('Last name') }}</div> {% endif %}
        </div>
        <div class="page-header">
          <h1>GoodWork details</h1>
        </div>


        <div class="form-group">
          <label for="category">Category</label>
          <select class="form-control" name="category" id="category" selected="request.post('category') ? request.post('category') : auth.category">
            <option value="Student">Student</option>
            <option value="Graduate">Graduate</option>
            <option value="Training">Training</option>
            <option value="Employer">Employer</option>
          </select>
        </div>

        <div class="form-group">
          <label for="future_ambition">Future Ambition</label>
          <select name="future_ambition" class="form-control future_ambition_select" id="future_ambition" selected="request.post('future_ambition') ? request.post('future_ambition') : auth.future_ambition">
            <!-- Options from http://jobsearch.about.com/od/best-jobs/fl/types-of-jobs.htm -->
            <option>Accountant</option>
            <option>Actor</option>
            <option>Administrative Assistant / Secretary</option>
            <option>Advertising</option>
            <option>Alaska Fishing Jobs</option>
            <option>Aircraft Dispatcher</option>
            <option>Aircraft Mechanic</option>
            <option>Airline Pilot</option>
            <option>Animal Careers</option>
            <option>Architecture</option>
            <option>Athletic Trainer</option>
            <option>Art Appraiser</option>
            <option>Art Auctioneer</option>
            <option>Bank Teller</option>
            <option>Book Publicist</option>
            <option>Book Publishing</option>
            <option>Call Center Jobs</option>
            <option>Career Counselor</option>
            <option>Consultant</option>
            <option>Computer Programmer</option>
            <option>Criminal Justice</option>
            <option>Databases</option>
            <option>Doctor</option>
            <option>EFL Teaching Jobs</option>
            <option>Emergency 911 Dispatcher</option>
            <option>Emergency Medical Services</option>
            <option>Federal Law Enforcement</option>
            <option>Financial Advisor</option>
            <option>Flight Attendant</option>
            <option>Freelance Editor</option>
            <option>Freelance Writer</option>
            <option>Funeral Director</option>
            <option>Fundraiser</option>
            <option>Game Industry</option>
            <option>Genealogist</option>
            <option>Government Jobs</option>
            <option>Hair Stylist</option>
            <option>Human Resources</option>
            <option>Insurance Agent</option>
            <option>Investment Banker</option>
            <option>Lawyer</option>
            <option>Management</option>
            <option>Meteorologist</option>
            <option>Military</option>
            <option>Mobile App Developer</option>
            <option>Museum</option>
            <option>Music Conductor</option>
            <option>NASCAR Driver</option>
            <option>Nonprofit Job</option>
            <option>Nurse</option>
            <option>Paramedic</option>
            <option>Patient Advocate</option>
            <option>Personal Fitness Trainer</option>
            <option>Pharmacist</option>
            <option>Police Officer</option>
            <option>Professional Artist</option>
            <option>Programming</option>
            <option>Public Relations</option>
            <option>Psychologist</option>
            <option>Retail</option>
            <option>Sales</option>
            <option>Ski Instructor</option>
            <option>School Jobs</option>
            <option>Social Work</option>
            <option>Substitute Teacher</option>
            <option>Teacher</option>
            <option>Teaching Abroad</option>
            <option>Teaching Online</option>
            <option>Veterinarian</option>
            <option>Waiter</option>
            <option>Web Developer</option>
            <option>Wedding Planner</option>
            <option>Writer / Editor</option>
            <option>Zoo Director</option>
          </select>
          {% if errors.has('Future ambition') %} <div class="alert alert-danger" role="alert"><strong>Oops! </strong>{{ errors.first('Future ambition') }}</div> {% endif %}
        </div>

        <div class="form-group">
          <label for="country">Country</label>
          <select name="country" class="form-control future_ambition_select" id="country" selected="request.post('country') ? request.post('country') : auth.country">
            <option value="Brunei">Brunei</option>
            <option value="Cambodia">Cambodia</option>
            <option value="East Timor">East Timor</option>
            <option value="Indonesia">Indonesia</option>
            <option value="Laos">Laos</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Myanmar">Myanmar</option>
            <option value="Philippines">Philippines</option>
            <option value="Singapore">Singapore</option>
            <option value="Thailand">Thailand</option>
            <option value="Vietnam">Vietnam</option>
          </select>
          {% if errors.has('Country') %} <div class="alert alert-danger" role="alert"><strong>Oops! </strong>{{ errors.first('Country') }}</div> {% endif %}
        </div>

        <div class="form-group">
          <label for="qualifications">Qualifications</label>
          <input class="form-control" style="margin-bottom: 20px;" name="qualifications" rows="3" id="qualifications" placeholder="Separate with comma" value="request.post('qualifications') ? request.post('qualifications') : auth.qualifications"/>
          {% if errors.has('Qualifications') %} <div class="alert alert-danger" role="alert"><strong>Oops! </strong>{{ errors.first('Qualifications') }}</div> {% endif %}
        </div>

        <div class="form-group">
          <label for="district">District</label>
          <select name="district" class="form-control future_ambition_select" id="district" value="request.post('district') ? request.post('district') : auth.district">
            <option value="Brunei Muara">Brunei Muara</option>
            <option value="Kuala Belait">Kuala Belait</option>
            <option value="Temburong">Temburong</option>
            <option value="Tutong">Tutong</option>
          </select>
          {% if errors.has('District') %} <div class="alert alert-danger" role="alert"><strong>Oops! </strong>{{ errors.first('District') }}</div> {% endif %}
        </div>
        <button type="submit" class="btn btn-default">Update</button>
        <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
      </form>
    </div>
  </div>
{% endblock %}

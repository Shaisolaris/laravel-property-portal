<script setup>
import LandingLayout from "$module@landing/layouts/LandingLayout.vue";
import Multiselect from "@vueform/multiselect";
import "@vueform/multiselect/themes/default.css";
import flatPickr from "vue-flatpickr-component";
import "flatpickr/dist/flatpickr.css";
</script>

<template>
    <LandingLayout color="white" :show-footer="false">
        <section class="section job-hero-section ptc-140">
            <b-container>
                <b-row>
                    <b-col xxl="3">
                        <BCard no-body class="job-list-view-card overflow-hidden" id="job-overview">
                            <img src="@/images/small/img-10.jpg" alt="" id="cover-img" class="img-fluid background object-fit-cover">
                            <BCardBody>
                                <div class="mt-3">
                                    <h5 class="view-title">Product Designer</h5>
                                    <div class="hstack gap-3 mb-3">
                <span class="text-muted"><i class="ri-building-line me-1 align-bottom"></i> <span
                    class="view-companyname">Themesbrand</span></span>
                                        <span class="text-muted"><i class="ri-map-pin-2-line me-1 align-bottom"></i> <span
                                            class="view-location">United Kingdom</span></span>
                                    </div>
                                    <p class="text-muted view-desc">A UI/UX designer's job is to create user-friendly interfaces that enable
                                        users to understand how to use complex technical products. If you're passionate about the latest
                                        technology trends and devices, you'll find great fulfillment in being involved in the design process for
                                        the next hot gadget.</p>
                                    <div class="py-3 border border-dashed border-start-0 border-end-0 mt-4">
                                        <BRow>
                                            <BCol lg="4" sm="6">
                                                <div>
                                                    <p class="mb-2 text-uppercase fw-medium fs-12 text-muted">Job Type</p>
                                                    <h5 class="fs-14 mb-0 view-type">Full Time</h5>
                                                </div>
                                            </BCol>
                                            <BCol lg="4" sm="6">
                                                <div>
                                                    <p class="mb-2 text-uppercase fw-medium fs-12 text-muted">Post Date</p>
                                                    <h5 class="fs-14 mb-0 view-postdate">15 Sep, 2022</h5>
                                                </div>
                                            </BCol>
                                            <BCol lg="4" sm="6">
                                                <div>
                                                    <p class="mb-2 text-uppercase fw-medium fs-12 text-muted">Experience</p>
                                                    <h5 class="fs-14 mb-0 view-experience">0 - 5 Year</h5>
                                                </div>
                                            </BCol>
                                        </BRow>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <h5 class="mb-3">Application Summary</h5>

                                    <div>
                                        <apexchart class="apex-charts" dir="ltr" height="300" :series="series" :options="chartOptions">
                                        </apexchart>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <BButton type="button" variant="success" class="w-100">Enroll Now</BButton>
                                </div>
                            </BCardBody>
                        </BCard>
                    </b-col>
                    <b-col xxl="9">
                        <b-row class="g-0">
                            <b-col cols="12">
                                <BCard variant="beige" no-body>
                                    <BCardBody class="p-4 pt-2">
                                        <div>Apply the five-step design thinking process to identify and creatively solve problems using a human-centered approach.</div>
                                    </BCardBody>
                                </BCard>
                            </b-col>
                            <b-col cols="12">
                                <BCard no-body>
                                    <BCardBody class="p-4 pt-2">
                                        <BTabs nav-class="nav-tabs-custom rounded border-bottom-0">
                                            <BTab class="nav-item" title="Personal Details" active>
                                                <form action="javascript:void(0);">
                                                    <BRow class="pt-4">
                                                        <BCol lg="6">
                                                            <div class="mb-3">
                                                                <label for="firstnameInput" class="form-label">First Name</label>
                                                                <input type="text" class="form-control" id="firstnameInput" placeholder="Enter your firstname" value="Dave" />
                                                            </div>
                                                        </BCol>
                                                        <BCol lg="6">
                                                            <div class="mb-3">
                                                                <label for="lastnameInput" class="form-label">Last Name</label>
                                                                <input type="text" class="form-control" id="lastnameInput" placeholder="Enter your lastname" value="Adame" />
                                                            </div>
                                                        </BCol>
                                                        <BCol lg="6">
                                                            <div class="mb-3">
                                                                <label for="phonenumberInput" class="form-label">Phone Number</label>
                                                                <input type="text" class="form-control" id="phonenumberInput" placeholder="Enter your phone number" value="+(1) 987 6543" />
                                                            </div>
                                                        </BCol>
                                                        <BCol lg="6">
                                                            <div class="mb-3">
                                                                <label for="emailInput" class="form-label">Email Address</label>
                                                                <input type="email" class="form-control" id="emailInput" placeholder="Enter your email" value="daveadame@velzon.com" />
                                                            </div>
                                                        </BCol>
                                                        <BCol lg="12">
                                                            <div class="mb-3">
                                                                <label for="JoiningdatInput" class="form-label">Joining Date</label>

                                                                <flat-pickr v-model="date" id="dateinput" class="form-control"></flat-pickr>

                                                            </div>
                                                        </BCol>
                                                        <BCol lg="12">
                                                            <div class="mb-3">
                                                                <label for="skillsInput" class="form-label">Skills</label>
                                                                <Multiselect v-model="value" id="skillsinput" mode="tags" :close-on-select="false" :searchable="true" :create-option="true" :options="[
                          { value: 'illustrator', label: 'Illustrator' },
                          { value: 'photoshop', label: 'Photoshop' },
                          { value: 'css', label: 'CSS' },
                          { value: 'html', label: 'HTML' },
                          { value: 'javascript', label: 'Javascript' },
                          { value: 'python', label: 'Python' },
                          { value: 'php', label: 'PHP' },
                        ]" />
                                                            </div>
                                                        </BCol>
                                                        <BCol lg="6">
                                                            <div class="mb-3">
                                                                <label for="designationInput" class="form-label">Designation</label>
                                                                <input type="text" class="form-control" id="designationInput" placeholder="Designation" value="Lead Designer / Developer" />
                                                            </div>
                                                        </BCol>
                                                        <BCol lg="6">
                                                            <div class="mb-3">
                                                                <label for="websiteInput1" class="form-label">Website</label>
                                                                <input type="text" class="form-control" id="websiteInput1" placeholder="www.example.com" value="www.velzon.com" />
                                                            </div>
                                                        </BCol>
                                                        <BCol lg="4">
                                                            <div class="mb-3">
                                                                <label for="cityInput" class="form-label">City</label>
                                                                <input type="text" class="form-control" id="cityInput" placeholder="City" value="California" />
                                                            </div>
                                                        </BCol>
                                                        <BCol lg="4">
                                                            <div class="mb-3">
                                                                <label for="countryInput" class="form-label">Country</label>
                                                                <input type="text" class="form-control" id="countryInput" placeholder="Country" value="United States" />
                                                            </div>
                                                        </BCol>
                                                        <BCol lg="4">
                                                            <div class="mb-3">
                                                                <label for="zipcodeInput" class="form-label">Zip Code</label>
                                                                <input type="text" class="form-control" minlength="5" maxlength="6" id="zipcodeInput" placeholder="Enter zipcode" value="90011" />
                                                            </div>
                                                        </BCol>
                                                        <BCol lg="12">
                                                            <div class="mb-3 pb-2">
                                                                <label for="exampleFormControlTextarea" class="form-label">Description</label>
                                                                <textarea class="form-control" id="exampleFormControlTextarea" placeholder="Enter your description" rows="3">
                        Hi I'm Anna Adame,It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is European languages are members of the same family.</textarea>
                                                            </div>
                                                        </BCol>
                                                        <BCol lg="12">
                                                            <div class="hstack gap-2 justify-content-end">
                                                                <BButton type="submit" variant="primary">
                                                                    Updates
                                                                </BButton>
                                                                <BButton type="button" variant="soft-secondary">
                                                                    Cancel
                                                                </BButton>
                                                            </div>
                                                        </BCol>
                                                    </BRow>
                                                </form>
                                            </BTab>
                                            <BTab title="Change Password">
                                                <form action="javascript:void(0);">
                                                    <BRow class="g-2 pt-4">
                                                        <BCol lg="4">
                                                            <div>
                                                                <label for="oldpasswordInput" class="form-label">Old Password*</label>
                                                                <input type="password" class="form-control" id="oldpasswordInput" placeholder="Enter current password" />
                                                            </div>
                                                        </BCol>
                                                        <BCol lg="4">
                                                            <div>
                                                                <label for="newpasswordInput" class="form-label">New Password*</label>
                                                                <input type="password" class="form-control" id="newpasswordInput" placeholder="Enter new password" />
                                                            </div>
                                                        </BCol>
                                                        <BCol lg="4">
                                                            <div>
                                                                <label for="confirmpasswordInput" class="form-label">Confirm Password*</label>
                                                                <input type="password" class="form-control" id="confirmpasswordInput" placeholder="Confirm password" />
                                                            </div>
                                                        </BCol>
                                                        <BCol lg="12">
                                                            <div class="mb-3">
                                                                <BLink href="javascript:void(0);" class="link-secondary text-decoration-underline">Forgot
                                                                    Password
                                                                    ?</BLink>
                                                            </div>
                                                        </BCol>
                                                        <BCol lg="12">
                                                            <div class="text-end">
                                                                <BButton type="submit" variant="primary">
                                                                    Change Password
                                                                </BButton>
                                                            </div>
                                                        </BCol>
                                                    </BRow>
                                                </form>
                                                <div class="mt-4 mb-3 border-bottom pb-2">
                                                    <div class="float-end">
                                                        <BLink href="javascript:void(0);" class="link-secondary">All Logout</BLink>
                                                    </div>
                                                    <h5 class="card-title">Login History</h5>
                                                </div>
                                                <div class="d-flex align-items-center mb-3">
                                                    <div class="flex-shrink-0 avatar-sm">
                                                        <div class="avatar-title bg-light text-primary rounded-3 fs-18">
                                                            <i class="ri-smartphone-line"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6>iPhone 12 Pro</h6>
                                                        <p class="text-muted mb-0">
                                                            Los Angeles, United States - March 16 at 2:47PM
                                                        </p>
                                                    </div>
                                                    <div>
                                                        <BLink href="javascript:void(0);" class="link-secondary">Logout</BLink>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center mb-3">
                                                    <div class="flex-shrink-0 avatar-sm">
                                                        <div class="avatar-title bg-light text-primary rounded-3 fs-18">
                                                            <i class="ri-tablet-line"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6>Apple iPad Pro</h6>
                                                        <p class="text-muted mb-0">
                                                            Washington, United States - November 06 at 10:43AM
                                                        </p>
                                                    </div>
                                                    <div>
                                                        <BLink href="javascript:void(0);" class="link-secondary">Logout</BLink>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center mb-3">
                                                    <div class="flex-shrink-0 avatar-sm">
                                                        <div class="avatar-title bg-light text-primary rounded-3 fs-18">
                                                            <i class="ri-smartphone-line"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6>Galaxy S21 Ultra 5G</h6>
                                                        <p class="text-muted mb-0">
                                                            Conneticut, United States - June 12 at 3:24PM
                                                        </p>
                                                    </div>
                                                    <div>
                                                        <BLink href="javascript:void(0);" class="link-secondary">Logout</BLink>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 avatar-sm">
                                                        <div class="avatar-title bg-light text-primary rounded-3 fs-18">
                                                            <i class="ri-macbook-line"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6>Dell Inspiron 14</h6>
                                                        <p class="text-muted mb-0">
                                                            Phoenix, United States - July 26 at 8:10AM
                                                        </p>
                                                    </div>
                                                    <div>
                                                        <BLink href="javascript:void(0);">Logout</BLink>
                                                    </div>
                                                </div>
                                            </BTab>
                                            <BTab title="Experience">
                                                <form>
                                                    <div id="newlink">
                                                        <div id="1">
                                                            <BRow class="pt-4">
                                                                <BCol lg="12">
                                                                    <div class="mb-3">
                                                                        <label for="jobTitle" class="form-label">Job Title</label>
                                                                        <input type="text" class="form-control" id="jobTitle" placeholder="Job title" value="Lead Designer / Developer" />
                                                                    </div>
                                                                </BCol>
                                                                <BCol lg="6">
                                                                    <div class="mb-3">
                                                                        <label for="companyName" class="form-label">Company Name</label>
                                                                        <input type="text" class="form-control" id="companyName" placeholder="Company name" value="Themesbrand" />
                                                                    </div>
                                                                </BCol>
                                                                <BCol lg="6">
                                                                    <div class="mb-3">
                                                                        <label for="experienceYear" class="form-label">Experience Years</label>
                                                                        <BRow>
                                                                            <BCol lg="5">
                                                                                <Multiselect class="form-control" v-model="value2" :close-on-select="true" :searchable="true" :create-option="true" :options="[
                                  { value: '', label: 'Select years' },
                                  { value: 'Choice 1', label: '2001' },
                                  { value: 'Choice 2', label: '2002' },
                                  { value: 'Choice 3', label: '2003' },
                                  { value: 'Choice 4', label: '2004' },
                                  { value: 'Choice 5', label: '2005' },
                                  { value: 'Choice 6', label: '2006' },
                                  { value: 'Choice 7', label: '2007' },
                                  { value: 'Choice 8', label: '2008' },
                                  { value: 'Choice 9', label: '2009' },
                                  { value: 'Choice 10', label: '2010' },
                                  { value: 'Choice 11', label: '2011' },
                                  { value: 'Choice 12', label: '2012' },
                                  { value: 'Choice 13', label: '2013' },
                                  { value: 'Choice 14', label: '2014' },
                                  { value: 'Choice 15', label: '2015' },
                                  { value: 'Choice 16', label: '2016' },
                                  { value: 'Choice 17', label: '2017' },
                                  { value: 'Choice 18', label: '2018' },
                                  { value: 'Choice 19', label: '2019' },
                                  { value: 'Choice 20', label: '2020' },
                                  { value: 'Choice 21', label: '2021' },
                                  { value: 'Choice 22', label: '2022' }


                                ]" />
                                                                            </BCol>
                                                                            <BCol cols="auto" class="align-self-center">to</BCol>
                                                                            <BCol lg="5">


                                                                                <Multiselect class="form-control" v-model="value1" :close-on-select="true" :searchable="true" :create-option="true" :options="[
                                  { value: '', label: 'Select years' },
                                  { value: 'Choice 1', label: '2001' },
                                  { value: 'Choice 2', label: '2002' },
                                  { value: 'Choice 3', label: '2003' },
                                  { value: 'Choice 4', label: '2004' },
                                  { value: 'Choice 5', label: '2005' },
                                  { value: 'Choice 6', label: '2006' },
                                  { value: 'Choice 7', label: '2007' },
                                  { value: 'Choice 8', label: '2008' },
                                  { value: 'Choice 9', label: '2009' },
                                  { value: 'Choice 10', label: '2010' },
                                  { value: 'Choice 11', label: '2011' },
                                  { value: 'Choice 12', label: '2012' },
                                  { value: 'Choice 13', label: '2013' },
                                  { value: 'Choice 14', label: '2014' },
                                  { value: 'Choice 15', label: '2015' },
                                  { value: 'Choice 16', label: '2016' },
                                  { value: 'Choice 17', label: '2017' },
                                  { value: 'Choice 18', label: '2018' },
                                  { value: 'Choice 19', label: '2019' },
                                  { value: 'Choice 20', label: '2020' },
                                  { value: 'Choice 21', label: '2021' },
                                  { value: 'Choice 22', label: '2022' }


                                ]" />
                                                                            </BCol>
                                                                        </BRow>
                                                                    </div>
                                                                </BCol>
                                                                <BCol lg="12">
                                                                    <div class="mb-3">
                                                                        <label for="jobDescription" class="form-label">Job Description</label>
                                                                        <textarea class="form-control" id="jobDescription" rows="3" placeholder="Enter description">
                            You always want to make sure that your fonts work well together and try to limit the number of fonts you use to three or less. Experiment and play around with the fonts that you already have in the software you're working with reputable font websites. </textarea>
                                                                    </div>
                                                                </BCol>
                                                                <div class="hstack gap-2 justify-content-end">
                                                                    <BLink class="btn btn-success" href="javascript:void(0);">Delete</BLink>
                                                                </div>
                                                            </BRow>
                                                        </div>
                                                    </div>
                                                    <div id="newForm" style="display: none"></div>
                                                    <BCol lg="12">
                                                        <div class="hstack gap-2">
                                                            <BButton type="button" variant="success">
                                                                Update
                                                            </BButton>
                                                            <BLink href="javascript:void(0);" class="btn btn-primary">Add New</BLink>
                                                        </div>
                                                    </BCol>
                                                </form>
                                            </BTab>
                                            <BTab title="Privacy Policy">
                                                <div class="mb-4 pb-2 pt-4">
                                                    <h5 class="card-title text-decoration-underline mb-3">
                                                        Security:
                                                    </h5>
                                                    <div class="d-flex flex-column flex-sm-row mb-4 mb-sm-0">
                                                        <div class="flex-grow-1">
                                                            <h6 class="fs-14 mb-1">Two-factor Authentication</h6>
                                                            <p class="text-muted">
                                                                Two-factor authentication is an enhanced security
                                                                meansur. Once enabled, you'll be required to give two
                                                                types of identification when you log into Google
                                                                Authentication and SMS are Supported.
                                                            </p>
                                                        </div>
                                                        <div class="flex-shrink-0 ms-sm-3">
                                                            <BLink href="javascript:void(0);" class="btn btn-sm btn-primary">Enable Two-facor Authentication
                                                            </BLink>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column flex-sm-row mb-4 mb-sm-0 mt-2">
                                                        <div class="flex-grow-1">
                                                            <h6 class="fs-14 mb-1">Secondary Verification</h6>
                                                            <p class="text-muted">
                                                                The first factor is a password and the second commonly
                                                                includes a text with a code sent to your smartphone, or
                                                                biometrics using your fingerprint, face, or retina.
                                                            </p>
                                                        </div>
                                                        <div class="flex-shrink-0 ms-sm-3">
                                                            <BLink href="javascript:void(0);" class="btn btn-sm btn-primary">Set up secondary method</BLink>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column flex-sm-row mb-4 mb-sm-0 mt-2">
                                                        <div class="flex-grow-1">
                                                            <h6 class="fs-14 mb-1">Backup Codes</h6>
                                                            <p class="text-muted mb-sm-0">
                                                                A backup code is automatically generated for you when
                                                                you turn on two-factor authentication through your iOS
                                                                or Android Twitter app. You can also generate a backup
                                                                code on twitter.com.
                                                            </p>
                                                        </div>
                                                        <div class="flex-shrink-0 ms-sm-3">
                                                            <BLink href="javascript:void(0);" class="btn btn-sm btn-primary">Generate backup codes</BLink>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <h5 class="card-title text-decoration-underline mb-3">
                                                        Application Notifications:
                                                    </h5>
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="d-flex">
                                                            <div class="flex-grow-1">
                                                                <label for="directMessage" class="form-check-label fs-14">Direct messages</label>
                                                                <p class="text-muted">
                                                                    Messages from people you follow
                                                                </p>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <div class="form-check form-switch">
                                                                    <input class="form-check-input" type="checkbox" role="switch" id="directMessage" checked />
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex mt-2">
                                                            <div class="flex-grow-1">
                                                                <label class="form-check-label fs-14" for="desktopNotification">
                                                                    Show desktop notifications
                                                                </label>
                                                                <p class="text-muted">
                                                                    Choose the option you want as your default setting.
                                                                    Block a site: Next to "Not allowed to send
                                                                    notifications," click Add.
                                                                </p>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <div class="form-check form-switch">
                                                                    <input class="form-check-input" type="checkbox" role="switch" id="desktopNotification" checked />
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex mt-2">
                                                            <div class="flex-grow-1">
                                                                <label class="form-check-label fs-14" for="emailNotification">
                                                                    Show email notifications
                                                                </label>
                                                                <p class="text-muted">
                                                                    Under Settings, choose Notifications. Under Select an
                                                                    account, choose the account to enable notifications
                                                                    for.
                                                                </p>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <div class="form-check form-switch">
                                                                    <input class="form-check-input" type="checkbox" role="switch" id="emailNotification" />
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex mt-2">
                                                            <div class="flex-grow-1">
                                                                <label class="form-check-label fs-14" for="chatNotification">
                                                                    Show chat notifications
                                                                </label>
                                                                <p class="text-muted">
                                                                    To prevent duplicate mobile notifications from the
                                                                    Gmail and Chat apps, in settings, turn off Chat
                                                                    notifications.
                                                                </p>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <div class="form-check form-switch">
                                                                    <input class="form-check-input" type="checkbox" role="switch" id="chatNotification" />
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex mt-2">
                                                            <div class="flex-grow-1">
                                                                <label class="form-check-label fs-14" for="purchaesNotification">
                                                                    Show purchase notifications
                                                                </label>
                                                                <p class="text-muted">
                                                                    Get real-time purchase alerts to protect yourself from
                                                                    fraudulent charges.
                                                                </p>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <div class="form-check form-switch">
                                                                    <input class="form-check-input" type="checkbox" role="switch" id="purchaesNotification" />
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <h5 class="card-title text-decoration-underline mb-3">
                                                        Delete This Account:
                                                    </h5>
                                                    <p class="text-muted">
                                                        Go to the Data & Privacy section of your profile Account.
                                                        Scroll to "Your data & privacy options." Delete your Profile
                                                        Account. Follow the instructions to delete your account :
                                                    </p>
                                                    <div>
                                                        <input type="password" class="form-control" id="passwordInput" placeholder="Enter your password" value="make@321654987" style="max-width: 265px" />
                                                    </div>
                                                    <div class="hstack gap-2 mt-3">
                                                        <BLink href="javascript:void(0);" class="btn btn-soft-danger">Close & Delete This Account</BLink>
                                                        <BLink href="javascript:void(0);" class="btn btn-light">Cancel</BLink>
                                                    </div>
                                                </div>
                                            </BTab>
                                        </BTabs>
                                    </BCardBody>
                                </BCard>
                            </b-col>
                        </b-row>
                    </b-col>
                </b-row>
            </b-container>
        </section>
    </LandingLayout>
</template>

<style scoped>

</style>
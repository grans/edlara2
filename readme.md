# The Features of The Application 
[![Build Status](https://travis-ci.org/grans/edlara2.svg?branch=master)](https://travis-ci.org/grans/edlara2) [![StyleCI](https://github.styleci.io/repos/201577161/shield?branch=master)](https://github.styleci.io/repos/201577161) [![Maintainability](https://api.codeclimate.com/v1/badges/ecbc74888f6ff3d0bceb/maintainability)](https://codeclimate.com/github/grans/edlara2/maintainability) [![Test Coverage](https://api.codeclimate.com/v1/badges/ecbc74888f6ff3d0bceb/test_coverage)](https://codeclimate.com/github/grans/edlara2/test_coverage)

1. Standard User Management
	1. Create User.
	2. Make User as a Administrator.
	3. User Registration Facility
	4. User Password Reset Facility

2. Tutorial Management
	1. Create Tutorial
	2. Update Tutorial
	3. Delete Tutorial
	4. Attaching a Exam to a Tutorial. Only way to make it available to the users.

3. Exams Management
	1. Dynamically Create MCQ Question Papers from User Input.
	2. Automatically Correcting Exam Questions on Request.(inorder to reduce serverload.)
	3. Storing MCQ Question Data's Permanently for a Re-Correction to be requested by teacher if any mistakes on question paper answers.
	4. Exams cannot be viewed again,only marks viewing is currently supported.

4. Assessment Management
	1. Assessments Can only created by Students from front-end links.
	2. Assessments can be only rated by teachers whom it was submitted to.
	3. Only one Assessment can be submitted for a tutorial at a time.
	4. Exams feature is incorporated in Assessment Management to give easier access.
	5. Marks are automatically given by system via Stored Answers of the Exam on request.
	6. Teacher cannot update marks for a Exam manually.
	7. Teacher can give reviews on Exam Paper done by Student based on marks. Exam paper views are not incorporated into Assessment Pages.


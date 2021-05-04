<h1>University Info Rest Api</h1>
<h5>The API is created with goal of making Nigeria University information and accredited courses accessible for approved universities available for developers</h5>

GET
universities list
https://beelarvel.herokuapp.com/api/universities
Get all university data.
Example
<code>
universities list
Request
CURL
curl --location --request GET 'https://beelarvel.herokuapp.com/api/universities'
JSON
[
  {
    "id": 1,
    "institution_name": "University of Lagos",
    "type": "Public(federal)",
    "location": "Lagos State",
    "slug": "Unilag",
    "created_at": "2021-04-07T12:34:31.000000Z",
    "updated_at": "2021-04-07T12:34:31.000000Z"
  },
  {
    "id": 2,
    "institution_name": "Lagos State University",
    "type": "Public(state)",
    "location": "Lagos State",
    "slug": "Lasu",
    "created_at": "2021-04-07T12:53:07.000000Z",
    "updated_at": "2021-04-07T12:53:07.000000Z"
  },
  {
    "id": 3,
    "institution_name": "University of Calabar",
    "type": "Federal",
    "location": "Akwa Ibom",
    "slug": "UniCal",
    "created_at": "2021-04-09T16:14:55.000000Z",
    "updated_at": "2021-04-09T16:14:55.000000Z"
  },
  {
    "id": 4,
    "institution_name": "University of Jos",
    "type": "Federal",
    "location": "Jos",
    "slug": "UniJos",
    "created_at": "2021-04-09T16:17:02.000000Z",
    "updated_at": "2021-04-09T16:17:02.000000Z"
  },
  {
    "id": 5,
    "institution_name": "Osun State University",
    "type": "State",
    "location": "Osun",
    "slug": "OSU",
    "created_at": "2021-04-09T16:23:02.000000Z",
    "updated_at": "2021-04-09T16:23:02.000000Z"
  },
  {
    "id": 6,
    "institution_name": "Moshood Abiola University",
    "type": "State",
    "location": "Ogun",
    "slug": "MAPOLY",
    "created_at": "2021-04-09T16:25:12.000000Z",
    "updated_at": "2021-04-09T16:25:12.000000Z"
  },
  {
    "id": 7,
    "institution_name": "Federal University of Technology, Akure",
    "type": "Federal",
    "location": "Ondo",
    "slug": "FUTA",
    "created_at": "2021-04-09T16:40:44.000000Z",
    "updated_at": "2021-04-09T16:40:44.000000Z"
  },
  {
    "id": 8,
    "institution_name": "University of Benin",
    "type": "Federal",
    "location": "Edo",
    "slug": "UNIBEN",
    "created_at": "2021-04-09T16:41:50.000000Z",
    "updated_at": "2021-04-09T16:41:50.000000Z"
  }
]
</code>
GET
courses list
https://beelarvel.herokuapp.com/api/courses
Make things easier for your teammates with a complete request description.
Example
courses list
Request
CURL
curl --location --request GET 'https://beelarvel.herokuapp.com/api/courses'
JSON
[
    {
        "id": 7,
        "course_title": "Nursing",
        "description": "Nursing is a profession within the health care sector focused on the care of individuals families and communities so they may attain, maintain, or recover optimal health and quality of life.",
        "waec_subjects": "Mathematics, English Language, Chemistry, Physics, Biology",
        "jamb_subject": "Use of English, Physics, Chemistry, Biology",
        "universities": "OAU, UI, Uni. of Jos, Uni. of Ilorin, Uni. of Abuja, University of lagos, Ahmadu Bello University Zaria",
        "career_opportunities": "Bedside nurse, Legal consultancy nurse, School nurse",
        "professional_exams": "NUCLEX, NMCN  Exam, Midwifery Exam",
        "additional_skills": "ACLS ( advanced cardiac life support), BLS ( basic life support)",
        "duration": "5 Years",
        "created_at": "2021-04-07T12:47:16.000000Z",
        "updated_at": "2021-04-07T12:50:58.000000Z"
    },
    {
        "id": 8,
        "course_title": "Physiotherapy",
        "description": "A physiotherapist is responsible for restoring bodily functions to an adequate level following illness or injury.",
        "waec_subjects": "Core science subjects, English, Mathematics, Economics and any other 3 subjects",
        "jamb_subject": "Use of English and core science subjects",
        "universities": "Bayero University Kano, Federal University Ndufu-Alike Ebonyi, University Of Benin, University Of Ibadan, University Of Lagos, University Of Maiduguri, Nnamdi Azikiwe University, Bowen University Iwo, Evangel University Ebonyi",
        "career_opportunities": "Carer (elderly and limited mobility), Sports Therapist, Fitness, General physiotherapy",
        "professional_exams": "Exams for specialization",
        "additional_skills": "Gymnasiums",
        "duration": "4",
        "created_at": "2021-04-21T23:14:34.000000Z",
        "updated_at": "2021-04-21T23:14:34.000000Z"
    },
    {
        "id": 9,
        "course_title": "French",
        "description": "It is learning French as a language",
        "waec_subjects": "English, Maths, French, Literature in English, Government, Economics, And other art related subjects",
        "jamb_subject": "English, French, Literature, Govt or history",
        "universities": "Abia State University, Ahmadu Bello University Zaria, Ambrose Alli University Ekpoma, Babcock University Ilishan-Remo, Bauchi State University, Bayero University Kano, Benue State University, Covenant University Ota, Delta State University, Ebonyi State University, Ekiti State University, Federal University Lafia Nasarawa, Federal University Ndufu-Alike Ebonyi, Fountain University Osogbo, Gregory University, Uturu Abia State, Ibrahim Badamasi Babangida University Lapai, Imo State University Owerri, Kaduna State University, Kwara State University, Nasarawa State University Keffi, Nigerian Police Academy Wudil Kano, Obafemi Awolowo University Ile-Ife, Olabisi Onabanjo University Ago-Iwoye, Osun State University Osogbo, Taraba State University Jalingo, Umaru Musa Yaradua University Katsina, University Of Benin, University Of Calabar, University Of Ibadan, University Of Ilorin, University Of Jos, University Of Lagos, University Of Maiduguri, University Of Nigeria Nsukka, University Of Port-Harcourt, University Of Uyo, Usmanu Danfodio University Sokoto",
        "career_opportunities": "Translator, Interpreter, Publishing (editor proofreader), Hospitality, Tour Guide, Resort staff, Flight attendant, Diploma, Consul, Ambassador, Teacher, VOA, NGO staff, International relations manager, Journalist",
        "professional_exams": "Delf- diploma d'etudes en langue francaise, Dalf - diplome approfondi de lqngue francaise",
        "additional_skills": "Public speaking, Writing",
        "duration": "4",
        "created_at": "2021-04-21T23:36:31.000000Z",
        "updated_at": "2021-04-21T23:36:31.000000Z"
    },
    {
        "id": 10,
        "course_title": "Biochemistry",
        "description": "Biochemistry Study Chemistry and life at molecular level",
        "waec_subjects": "Core science subjects, English, Mathematics, Biology and any other 3 subjects",
        "jamb_subject": "Use of English and core science subjects",
        "universities": "Bayero University Kano,  Federal University Ndufu-Alike Ebonyi,  Kwara State University, Osun State University Osogbo, University Of Benin, University Of Ibadan, University Of Lagos, University Of Maiduguri, Nnamdi Azikiwe University, Ladoke Akintola University, Bowen University Iwo, Evangel University Ebonyi",
        "career_opportunities": "Research, Lecturing, Quality Analyst, Quality Control Personnel",
        "professional_exams": null,
        "additional_skills": "Bioinformatics",
        "duration": "4 - 5",
        "created_at": "2021-04-22T10:53:02.000000Z",
        "updated_at": "2021-04-22T10:53:02.000000Z"
    },
    {
        "id": 11,
        "course_title": "Physiology",
        "description": "
POST
add universities
https://beelarvel.herokuapp.com/api/universities
Make things easier for your teammates with a complete request description.
Authorization
Bearer Token
Token
<token>
Request Headers
Accept
application/json
Bodyraw (json)
JSON
{
  "institution_name": "Olabisi Onabanjo University",
  "type": "State",
  "location": "Ogun State",
  "slug": "oou"
}
Example
add universities
Request
CURL
curl --location --request POST 'https://beelarvel.herokuapp.com/api/universities' \
--header 'Accept: application/json' \
--data-raw '{
    "institution_name": "Olabisi Onabanjo University",
    "type": "State",
    "location": "Ogun State",
    "slug": "oou"
}'
JSON
{
  "institution_name": "Olabisi Onabanjo University",
  "type": "State",
  "location": "Ogun State",
  "slug": "oou",
  "updated_at": "2021-05-04T02:32:25.000000Z",
  "created_at": "2021-05-04T02:32:25.000000Z",
  "id": 9
}
POST
add course
https://beelarvel.herokuapp.com/api/courses
Make things easier for your teammates with a complete request description.
Authorization
Bearer Token
Token
<token>
Request Headers
Accept
application/json
Bodyraw (json)
JSON
{
  "course_title": "Creative Art",
  "description": "The creative arts are activities that engage  imagination and can include activities such as art, dance, drama, puppetry, and music. They stimulate and help people cultivate their abilities across virtually every domain, and they are open-ended activities, fostering flexibility of the mind. And most important of all, the creative arts emphasize the process, teaching in a world that is progressively more and more product-driven that the method by which you arrive at the destination is as or more significant than the destination itself.",
  "waec_subjects": "English Language, Mathematics, Biology, Yoruba, Government, Ecomomics, Government, Geography, Fine Art",
  "jamb_subject": "Use of English, Yoruba, Government, Fine Art",
  "universities": "OAU, UI, Uni. of Jos, Uni. of Ilorin, Uni. of Abuja, University of lagos, Ahmadu Bello University Zaria, Unilag, Unimad, Uniport, Unn, etc.",
  "career_opportunities": "Actor, Animator, Art therapist, Broadcast presenter, community arts worker, Dramatherapist, Dancer",
  "professional_exams": "",
  "additional_skills": "",
  "duration": "4 Years"
}
Example
add course
Request
CURL
curl --location --request POST 'https://beelarvel.herokuapp.com/api/courses' \
--header 'Accept: application/json' \
--data-raw '{
    "course_title": "Creative Art",
    "description": "The creative arts are activities that engage  imagination and can include activities such as art, dance, drama, puppetry, and music. They stimulate and help people cultivate their abilities across virtually every domain, and they are open-ended activities, fostering flexibility of the mind. And most important of all, the creative arts emphasize the process, teaching in a world that is progressively more and more product-driven that the method by which you arrive at the destination is as or more significant than the destination itself.",
    "waec_subjects": "English Language, Mathematics, Biology, Yoruba, Government, Ecomomics, Government, Geography, Fine Art",
    "jamb_subject": "Use of English, Yoruba, Government, Fine Art",
    "universities": "OAU, UI, Uni. of Jos, Uni. of Ilorin, Uni. of Abuja, University of lagos, Ahmadu Bello University Zaria, Unilag, Unimad, Uniport, Unn, etc.",
    "career_opportunities": "Actor, Animator, Art therapist, Broadcast presenter, community arts worker, Dramatherapist, Dancer",
    "professional_exams": "",
    "additional_skills": "",
    "duration": "4 Years"
}'
JSON
{
  "course_title": "Creative Art",
  "description": "The creative arts are activities that engage  imagination and can include activities such as art, dance, drama, puppetry, and music. They stimulate and help people cultivate their abilities across virtually every domain, and they are open-ended activities, fostering flexibility of the mind. And most important of all, the creative arts emphasize the process, teaching in a world that is progressively more and more product-driven that the method by which you arrive at the destination is as or more significant than the destination itself.",
  "waec_subjects": "English Language, Mathematics, Biology, Yoruba, Government, Ecomomics, Government, Geography, Fine Art",
  "jamb_subject": "Use of English, Yoruba, Government, Fine Art",
  "universities": "OAU, UI, Uni. of Jos, Uni. of Ilorin, Uni. of Abuja, University of lagos, Ahmadu Bello University Zaria, Unilag, Unimad, Uniport, Unn, etc.",
  "career_opportunities": "Actor, Animator, Art therapist, Broadcast presenter, community arts worker, Dramatherapist, Dancer",
  "professional_exams": null,
  "additional_skills": null,
  "duration": "4 Years",
  "updated_at": "2021-05-04T03:24:23.000000Z",
  "created_at": "2021-05-04T03:24:23.000000Z",
  "id": 20
}
PUT
update universities
https://beelarvel.herokuapp.com/api/universities/1
Make things easier for your teammates with a complete request description.
Authorization
Bearer Token
Token
<token>
Request Headers
Accept
application/json
Bodyraw (json)
JSON
{
  "slug": "unilag"
}
Example
update universities
Request
CURL
curl --location --request PUT 'https://beelarvel.herokuapp.com/api/universities/1' \
--header 'Accept: application/json' \
--data-raw '{
    "slug": "unilag"
}'
JSON
{
  "id": 1,
  "institution_name": "University of Lagos",
  "type": "Public(federal)",
  "location": "Lagos State",
  "slug": "unilag",
  "created_at": "2021-04-07T12:34:31.000000Z",
  "updated_at": "2021-05-04T02:36:54.000000Z"
}
PUT
update courses
https://beelarvel.herokuapp.com/api/courses/7
Make things easier for your teammates with a complete request description.
Authorization
Bearer Token
Token
<token>
Request Headers
Accept
application/json
Bodyraw (json)
JSON
{
  "description": "Nursing is a profession within the health care sector focused on the care of individuals, families and communities so they may attain, maintain, or recover optimal health and quality of life. Nurses may be differentiated from other health care providers by their approach to patient care, training and scope of practice. However, nurse practitioners are permitted by most jurisdictions to practice independently in a variety of settings."
}
Example
Request
CURL
curl --location --request PUT 'https://beelarvel.herokuapp.com/api/courses/7' \
--header 'Accept: application/json' \
--data-raw '{
    "professional_exams": ["NUCLEX", "NMCN Exam"," Midwifery Exam"]
}'
JSON
{
  "id": 7,
  "course_title": "Nursing",
  "description": "Nursing is a profession within the health care sector focused on the care of individuals, families and communities so they may attain, maintain, or recover optimal health and quality of life. Nurses may be differentiated from other health care providers by their approach to patient care, training and scope of practice. However, nurse practitioners are permitted by most jurisdictions to practice independently in a variety of settings.",
  "waec_subjects": "[\"Mathematics\",\"English Language\",\"Chemistry\",\"Physics\",\"Biology\"]",
  "jamb_subject": "[\"Use of English\",\"Physics\",\"Chemistry\",\"Biology\"]",
  "universities": "[\"OAU\",\"UI\",\"University of Jos\",\"University of Ilorin\",\"University of Abuja\",\"University of lagos\",\"Ahmadu Bello University Zaria\"]",
  "career_opportunities": "Bedside nurse, Legal consultancy nurse, School nurse",
  "professional_exams": [
    "NUCLEX",
    "NMCN Exam",
    "Midwifery Exam"
  ],
  "additional_skills": "ACLS ( advanced cardiac life support), BLS ( basic life support)",
  "duration": "5 Years",
  "created_at": "2021-04-07T12:47:16.000000Z",
  "updated_at": "2021-05-04T02:59:42.000000Z"
}
GET
university search
https://beelarvel.herokuapp.com/api/courses/search/Nursing
Make things easier for your teammates with a complete request description.
Example
university search
Request
CURL
curl --location --request GET 'https://beelarvel.herokuapp.com/api/universities/search/Unilag'
JSON
{
  "data": [
    {
      "id": 1,
      "institution_name": "University of Lagos",
      "type": "Public(federal)",
      "location": "Lagos State",
      "slug": "Unilag",
      "created_at": "2021-04-07T12:34:31.000000Z",
      "updated_at": "2021-04-07T12:34:31.000000Z"
    }
  ]
}
DEL
delete university
https://beelarvel.herokuapp.com/api/universities/10
Make things easier for your teammates with a complete request description.
Authorization
Bearer Token
Token
<token>
Request Headers
Accept
application/json
Example
delete university
Request
CURL
curl --location --request DELETE 'https://beelarvel.herokuapp.com/api/universities/10' \
--header 'Accept: application/json' \
--data-raw ''
JSON
{
  "message": "University has been removed"
}
DEL
delete course
https://beelarvel.herokuapp.com/api/courses/20
Make things easier for your teammates with a complete request description.
Authorization
Bearer Token
Token
<token>
Request Headers
Accept
application/json
Example
delete course
Request
CURL
curl --location --request DELETE 'https://beelarvel.herokuapp.com/api/courses/20' \
--header 'Accept: application/json' \
--data-raw ''
JSON
{
  "message": "course has been removed"
}
POST
register
https://beelarvel.herokuapp.com/api/register
Make things easier for your teammates with a complete request description.
Request Headers
Accept
application/json
Bodyraw (json)
JSON
{
  "name": "Hezekiah Fasanya",
  "email": "harbiola78@outlook.com",
  "password": "harby1234",
  "password_confirmation": "harby1234"
}
Example
register
Request
CURL
curl --location --request POST 'https://beelarvel.herokuapp.com/api/register' \
--header 'Accept: application/json' \
--data-raw '{
    "name": "Hezekiah Fasanya",
    "email": "harbiola78@outlook.com",
    "password": "harby1234",
    "password_confirmation": "harby1234"
}'
JSON
{
  "user": {
    "name": "Hezekiah Fasanya",
    "email": "harbiola78@outlook.com",
    "updated_at": "2021-05-04T02:23:13.000000Z",
    "created_at": "2021-05-04T02:23:13.000000Z",
    "id": 6
  },
  "token": "8|Yj6gGlCBxZuq5NyMfgzWDzbDQjcMsWwwJIGJsTF4"
}
POST
logout
https://beelarvel.herokuapp.com/api/register
Make things easier for your teammates with a complete request description.
Request Headers
Accept
application/json
Bodyraw (json)
JSON
{
  "name": "Hezekiah Fasanya",
  "email": "harbiola78@outlook.com",
  "password": "harby1234",
  "password_confirmation": "harby1234"
}
Example
logout
Request
CURL
curl --location --request POST 'https://beelarvel.herokuapp.com/api/logout' \
--header 'Accept: application/json' \
--data-raw ''
JSON
{
  "message": "Logged out"
}
POST
login
https://beelarvel.herokuapp.com/api/register
Make things easier for your teammates with a complete request description.
Request Headers
Accept
application/json
Bodyraw (json)
JSON
{
  "name": "Hezekiah Fasanya",
  "email": "harbiola78@outlook.com",
  "password": "harby1234",
  "password_confirmation": "harby1234"
}
Example
login
Request
CURL
curl --location --request POST 'https://beelarvel.herokuapp.com/api/login' \
--header 'Accept: application/json' \
--data-raw '{
    "email": "harbiola78@outlook.com",
    "password": "harby1234"
}'
JSON
{
  "user": {
    "id": 6,
    "name": "Hezekiah Fasanya",
    "email": "harbiola78@outlook.com",
    "email_verified_at": null,
    "created_at": "2021-05-04T02:23:13.000000Z",
    "updated_at": "2021-05-04T02:23:13.000000Z"
  },
  "token": "9|tObAbToopiA8ZJoJxPaJxpyp65H7xznZxsIu3T4C"
}
Click to Expand
JUMP

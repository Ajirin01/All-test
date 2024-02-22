const year = [
    {
        "id": 1,
        "year": "2021/2022"
    },
    {
        "id": 2,
        "year": "2022/2023"
    },
    {
        "id": 3,
        "year": "2023/2024"
    }
]//done

const term = [
    {
        "id": 1,
        "name": "first term"
    },
    {
        "id": 2,
        "name": "second term"
    },
    {
        "id": 3,
        "name": "third term"
    }
]//done

const exam = [
    {
        "id": 1,
        "title": "2022 Second Term Exam", 
        "descripton": "Second Term exam for 2021/2022 Session",
        "start_date": "2022-10-30",
        "end_date": "2022-11-03",
        "year_id": 1,
        "term_id": 2,
        "status": "active"
    },
    {
        "id": 2,
        "title": "2022  Second Term C.A test", 
        "descripton": "Second Term contineous accessment for 2021/2022 Session",
        "start_date": "2022-10/30",
        "end_date": "2022-11-3",
        "year_id": 1,
        "term_id": 2,
        "status": "active"
    }
]//done

const exam_paper = [
    {
        "id": 1,
        "name": "Primary One English exam",
        "classes_id": 1,
        "subject_id": 1,
        "exam_id": 1,
        "duration": 2,
        "start_time": "2022-10-30 10:30:00",
        "status": "active"
    },
    {
        "id": 2,
        "name": "Primary One Mathematics exam",
        "classes_id": 1,
        "subject_id": 2,
        "exam_id": 1,
        "duration": 2,
        "start_time": "2022-10-30 12:30:00",
        "status": "active"
    },
    {
        "id": 3,
        "name": "Primary Two Mathematics exam",
        "classes_id": 2,
        "subject_id": 2,
        "exam_id": 1,
        "duration": 2,
        "start_time": "2022-10-30 11:30:00",
        "status": "active"
    }
]//done

const questions = [
    {
        "id": 1, 
        "exam_id": 1,
        "classes_id": 1,
        "subject_id": 1, 
        "exam_paper_id": 1,
        "question": "What is a  noun?"
    },
    {
        "id": 2, 
        "exam_id": 1,
        "classes_id": 1,
        "subject_id": 1, 
        "exam_paper_id": 1,
        "question": "Bola _____ to school everyday?"
    },
    {
        "id": 3, 
        "exam_id": 1,
        "classes_id": 1,
        "subject_id": 1, 
        "exam_paper_id": 1,
        "question": "What is an adjective?"
    },
    {
        "id": 4, 
        "exam_id": 1,
        "classes_id": 1,
        "subject_id": 2, 
        "exam_paper_id": 2,
        "question": "What are prime numbers?"
    }
]//done

const question_answer = [
    {
        "id": 1, 
        "question_id": 1,
        "answer": "Name of person, animal, place or things", 
        "correct": true
    },
    {
        "id": 2, 
        "question_id": 1,
        "answer": "An adjective of us", 
        "correct": false
    },
    {
        "id": 3, 
        "question_id": 1,
        "answer": "All of the above", 
        "correct": false
    },
    {
        "id": 4,
        "question_id": 2, 
        "answer": "went", 
        "correct": false
    },
    {
        "id": 5,
        "question_id": 2, 
        "answer": "goes", 
        "correct": true
    },
    {
        "id": 6,
        "question_id": 2, 
        "answer": "ran", 
        "correct": false
    },
    {
        "id": 7,
        "question_id": 2, 
        "answer": "came", 
        "correct": false
    },
    {
        "id": 8,
        "question_id": 3, 
        "answer": "Tells us nothing", 
        "correct": false
    },
    {
        "id": 9,
        "question_id": 3, 
        "answer": "An adjective qualifies a noun", 
        "correct": true
    },
    {
        "id": 10,
        "question_id": 3, 
        "answer": "Describes a verb", 
        "correct": false
    },
    {
        "id": 11,
        "question_id": 4, 
        "answer": "Multiples of 2", 
        "correct": false
    },
    {
        "id": 12,
        "question_id": 4, 
        "answer": "Numbers that can be devided by 2", 
        "correct": false
    },
    {
        "id": 13,
        "question_id": 4, 
        "answer": "All posivite numbers", 
        "correct": false
    },
    {
        "id": 14,
        "question_id": 4, 
        "answer": "Numbers that can only be divided by one and itself", 
        "correct": true
    }
]//done

const subjects = [
    {
        "id": 1,
        "name": "English"
    },
    {
        "id": 2,
        "name": "Mathematics"
    },
    {
        "id": 3,
        "name": "Socail Studies"
    },
    {
        "id": 4,
        "name": "Computer"
    }
]//done

const classes = [
    {
        "id": 1,
        "name": "Primary One"
    },
    {
        "id": 2,
        "name": "Primary Two"
    },
    {
        "id": 3,
        "name": "Primary Three"
    },
    {
        "id": 4,
        "name": "Primary Four"
    },
    {
        "id": 5,
        "name": "Primary Five"
    },
    {
        "id": 6,
        "name": "Primary Six"
    }
]//done

const results = [
    {
        "id": 1,
        "student_id": 1,
        "exam_id": 1,
        "subject_id": 1,
        "classes_id": 1,
        "year_id": 1,
        "term_id": 2,
        "score": 2,
        "over": 5,
        "exam_paper_name": "Primary One English exam",
        "exam_subject_name": "English",
        "exam_paper_id": 1
    }
]

const teachers = [
    {
        "id": 1,
        "name": "Yusuf Wale",
        "user_id": 2
    },
    {
        "id": 2,
        "name": "Gani Tunde",
        "user_id": 3
    },
    {
        "id": 3,
        "name": "Kenny Baba",
        "user_id": 4
    }
]//done

const teacher_subject = [
    {
        "id": 1,
        "teacher_id": 1,
        "subject_id": 2,
        "teacher_name": "Yusu Wale",
        "subject_name": "Mathematics"
    },
    {
        "id": 2,
        "teacher_id": 1,
        "subject_id": 1,
        "teacher_name": "Yusu Wale",
        "subject_name": "English"
    },
    {
        "id": 3,
        "teacher_id": 2,
        "subject_id": 4,
        "teacher_name": "Gani Tunde",
        "subject_name": "Computer"
    },
    {
        "id": 4,
        "teacher_id": 3,
        "subject_id": 2,
        "teacher_name": "Kenny Baba",
        "subject_name": "Mathematics"
    },
    {
        "id": 5,
        "teacher_id": 3,
        "subject_id": 3,
        "teacher_name": "Kenny Baba",
        "subject_name": "Social Studies"
    }
]//done

const teacher_class = [
    {
        "id": 1,
        "teacher_id": 1,
        "classes_id": 2,
        "classes_name": "Primary two",
        "teacher_name": "Yusuf Wale"
    },
    {
        "id": 2,
        "teacher_id": 2,
        "classes_id": 4,
        "classes_name": "Primary four",
        "teacher_name": "Gani Tunde"
    },
    {
        "id": 3,
        "teacher_id": 3,
        "classes_id": 1,
        "classes_name": "Primary one",
        "teacher_name": "Kenny Baba"
    },
    {
        "id": 4,
        "teacher_id": 3,
        "classes_id": 4,
        "classes_name": "Primary four",
        "teacher_name": "Kenny Baba"
    }

]//done

const students = [
    {
        "id": 1,
        "user_id": 5,
        "classes_id": 3,
        "name": "Abu Aare"
    },
    {
        "id": 2,
        "user_id": 6,
        "classes_id": 2,
        "name": "Kalejaye Arigbabuwo"
    },
    {
        "id": 3,
        "user_id": 7,
        "classes_id": 5,
        "name": "Tunde Sule"
    }
]//done

const users = [
    {
        "id": "1",
        "name": "Olagoke Mubarak",
        "username": "Ajirin",
        "email": "mubarakolagoke@gmail.com",
        "password": "Ajirin01",
        "phone": "07036998004",
        "role": "admin"
    },
    {
        "id": "2",
        "name": "Yusuf Wale",
        "email": "wale@gmail.com",
        "password": "teacher1",
        "phone": "000000000",
        "role": "teacher"
    },
    {
        "id": "3",
        "name": "Gani Tunde",
        "email": "tunde@gmail.com",
        "password": "teacher2",
        "phone": "000000000",
        "role": "teacher"
    },
    {
        "id": "4",
        "name": "Kenny Baba",
        "email": "baba@gmail.com",
        "password": "teacher3",
        "phone": "000000000",
        "role": "teacher"
    },
    {
        "id": "5",
        "name": "Abu Aare",
        "email": "student1",
        "password": "student1",
        "phone": "000000000",
        "role": "student"
    },
    {
        "id": "6",
        "name": "Kalejaye Arigbabuwo",
        "email": "student2",
        "password": "student2",
        "phone": "000000000",
        "role": "student"
    },
    {
        "id": "7",
        "name": "Tunde Sule",
        "email": "student3",
        "password": "student3",
        "phone": "000000000",
        "role": "student"
    },
    {
        "id": "8",
        "name": "Busura Rabiu",
        "email": "student4",
        "password": "student4",
        "phone": "000000000",
        "role": "student"
    }
]//omitted
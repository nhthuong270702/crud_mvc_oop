<?php
class StudentController extends Controller
{
    public function __construct()
    {
        $this->Student = $this->model('Student');
    }
    public function redirect($location)
    {
        header('Location: ' . $location);
    }
    public function index()
    {
        $student  = $this->Student->getStudent();
        $this->view('index', [
            'student' => $student
        ]);
    }

    public function create()
    {
        if (isset($_POST['add'])) {
            $result = $this->Student->createStudent($_POST['Name'], $_POST['Email'], $_POST['Address']);
            if ($result) {
                $this->redirect(URLROOT . '/views/index');
            }
        }
        $this->view('create');
    }

    public function update($id)
    {

        $findStudent = $this->Student->findStudentById($id);

        if (isset($_POST['update'])) {
            $update = $this->Student->updateStudent($id, $_POST['Name'], $_POST['Email'], $_POST['Address']);
            if ($update) {
                $this->redirect(URLROOT . '/views/index');
            }
        }
        $this->view('edit', [
            'findStudent' => $findStudent
        ]);
    }
    public function show($id)
    {
        $student = $this->Student->findStudentById($id);
        $this->view('show', [
            'student' => $student
        ]);
    }
    public function search($name)
    {
        $student = $this->Student->searchStudentByName($name);
        $this->view('search', [
            'student' => $student
        ]);
    }
    public function delete($id)
    {
        $delete = $this->Student->deleteStudent($id);
        if ($delete) {
            $this->redirect(URLROOT . '/views/index');
        }
        $this->view('index');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questions = Question::get();
        return view('admin.questions.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        $exams = Exam::get();
        return view('admin.questions.create',compact('exams'));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $question = new Question();
            $question->title = $request->title;
            $question->answers = $request->answers;
            $question->right_answer = $request->right_answer;
            $question->score = 10;
            $question->exam_id = $request->exam_id;
            $question->save();
            $notification = array(
                'message' => 'تم اضافه السؤال بنجاح',
                'alert-type' => 'success'
            );
            return redirect()->route('Question.create')->with($notification);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $question = Question::findorfail($id);
        $exams = Exam::get();
        return view('admin.questions.edit',compact('question','exams'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try {
            $question = Question::findorfail($request->id);
            $question->title = $request->title;
            $question->answers = $request->answers;
            $question->right_answer = $request->right_answer;
            $question->exam_id = $request->exam_id;
            $question->save();
            $notification = array(
                'message' => 'تم تعديل السؤال بنجاح',
                'alert-type' => 'info'
            );
            return redirect()->route('Question.index')->with($notification);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        try {
            Question::destroy($request->id);
            $notification = array(
                'message' => 'تم حذف السؤال بنجاح',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}

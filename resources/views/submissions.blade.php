@extends('layout.main')
@section('title')
    Create Homepage
@endsection
@section('content')

    <table>
        <tr>
            <th>Title</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Paper</th>
            <th>Review status</th>
        </tr>
        <?php
        $submissions = App\Submission::all();
        foreach ($submissions as $paper) {
        echo "<tr>";
        //			echo Form::open();
        echo "<form action=\"" . route('paper.update.post') . "\" method=\"POST\" enctype=\"multipart/form-data\">";
        ?>
        @csrf
        <?php
        echo "<td>" . $paper->title . "</td>";
        echo "<td>" . $paper->first_name . "</td>";
        echo "<td>" . $paper->last_name . "</td>";
        echo "<td><a href=\"Paper/" . $paper->paper . "\">Download</a></td>";
        echo "<td><input type=\"checkbox\" onClick=\"this.form.submit()\" name=\"isReviewed\" value=\"reviewed\"" . ($paper->isReviewed == 1 ? 'checked' : '') . "></td>";
        echo "<input type=\"hidden\" name=\"id\" value=\"" . $paper->id . "\">";
        echo Form::close();
        echo "</tr>";
        //onClick=\"this.form.submit()\"
        }
        ?>
    </table>
@endsection

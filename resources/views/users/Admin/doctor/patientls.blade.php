<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table>
        <thead>
            <tr>
                <th>MRN</th>
                <th>Full Name</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Emergency Contact Name</th>
                <th>Relationship</th>
                <th>Emergency Phone Number</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($patients as $patient)
                <tr>
                    <td>{{ $patient->MRN }}</td>
                    <td>{{ $patient->Full_Name }}</td>
                    <td>{{ $patient->gender }}</td>
                    <td>{{ $patient->Age }}</td>
                    <td>{{ $patient->Phone_Number }}</td>
                    <td>{{ $patient->Address }}</td>
                    <td>{{ $patient->Emergency_CN }}</td>
                    <td>{{ $patient->Relationship }}</td>
                    <td>{{ $patient->E_Phone_Number }}</td>
                    <td>
                       
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>




    


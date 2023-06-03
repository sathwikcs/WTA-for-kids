<!DOCTYPE html>
<html>
<head>
  <title>Selection Sort</title>
  <!-- jQuery 3 -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript">
    var globalData = null;
    var tempData;

    if (tempData === null || tempData === undefined) {
      tempData = {};
    }

    tempData = {
      saveRecord: function () {
        var name = $('#name').val();
        var mobile = $('#mobile').val();
        var email = $('#email').val();

        if (name !== '' && mobile !== '' && email !== '') {
          var stu_id = Math.floor(Math.random() * 100000); // Random number generation

          var student = {
            stu_id: stu_id,
            stu_name: name,
            stu_mobile: mobile,
            stu_email: email
          };

          globalData.push(student);
          tempData.getRecord(); // Calling function to fetch the records.

          $('#name').val('');
          $('#mobile').val('');
          $('#email').val('');
        } else {
          alert("Text Field is empty!");
        }
      },
      getRecord: function () {
        var content = "";

        if (globalData) {
          $('#tableRow').html("");

          for (var i = 0; i < globalData.length; i++) {
            content += '<tr><td>' + globalData[i].stu_id + '</td><td>' + globalData[i].stu_name + '</td>' +
              '<td>' + globalData[i].stu_mobile + '</td><td>' + globalData[i].stu_email + '</td></tr>';
          }

          $('#tableRow').append(content);
        }
      },
      selectionSort: function () {
        if (globalData) {
          var sortedArr = selectionSort(globalData.map(function (student) {
            return student.stu_id;
          }));

          var content = "";
          $('#tableRow').html("");

          for (var i = 0; i < sortedArr.length; i++) {
            for (var j = 0; j < globalData.length; j++) {
              if (sortedArr[i] === globalData[j].stu_id) {
                content += '<tr><td>' + globalData[j].stu_id + '</td><td>' + globalData[j].stu_name + '</td>' +
                  '<td>' + globalData[j].stu_mobile + '</td><td>' + globalData[j].stu_email + '</td></tr>';
              }
            }
          }

          $('#tableRow').append(content);
        }
      },
    };

    function selectionSort(data) {
      for (var i = 0; i < data.length - 1; i++) {
        var min = i;

        for (var j = i + 1; j < data.length; j++) {
          if (data[j] < data[min]) {
            min = j;
          }
        }

        data = swapPositions(data, i, min);
      }

      return data;
    }

    function swapPositions(data, left, right) {
      var backupOldDataRightValue = data[right];
      data[right] = data[left];
      data[left] = backupOldDataRightValue;
      return data;
    }

    $(document).ready(function () {
      globalData = []; // Initialize globalData as an empty array
      tempData.getRecord();
    });
  </script>
</head>
<body>
  <center>
    <h1> Add Student Record </h1>
    <form id="formRecord">
      <table border="0">
        <tr>
          <td>Name</td>
          <td><input type="text" name="name" id="name"></td>
        </tr>
        <tr>
          <td>Mobile Number</td>
          <td><input type="number" name="mobile" id="mobile"></td>
        </tr>
        <tr>
          <td>Email ID</td>
          <td><input type="email" name="email" id="email"></td>
        </tr>
      </table><br>
      <button type="button" onclick="tempData.saveRecord();" style="width:150px;">Add Student</button>
    </form>
    <br /><br />
    <div style="overflow-x: scroll;height: 600px;width:60%;">
      <button type="button" style="width:150px;float: right;" onclick="tempData.selectionSort();">
        Selection Sort
      </button>
      <br /><br />
      <table border="1" style="width:100%;">
        <thead>
          <tr style="text-align: left;">
            <th>Student ID</th>
            <th>Name</th>
            <th>Mobile</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody id="tableRow">
        </tbody>
      </table>
    </div>
  </center>
</body>
</html>

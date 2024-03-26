$(document).ready(function () {
  $("#questionAnswer").on("keypress", function (e) {
    if (e.key === "Enter") {
      e.preventDefault();
      let Btn = $("#questionBtn");
      Btn.click();
    }
  });

  $("#questionBtn").on("click", function () {
    let question = $("#question").val();
    let answer = $("#questionAnswer").val();

    $.ajax({
      type: "POST",
      url: "includes/ajax.php",
      data: {
        question: question,
        answer: answer,
        submitQuesBtn: "submitQuesBtn",
      },
      success: function (response) {
        if (response == 200) {
          callAddQuestionSuccess();
        } else {
          callError();
        }
      },
    });
  });

  // show question edit modal
  $(".QuesEditBtn").on("click", function () {
    const value = $(this).val();
    $.ajax({
      type: "post",
      url: "includes/ajax.php",
      data: {
        question_id: value,
        questionSearch: "questionSearch",
      },
      success: function (data) {
        $("#editOutput").html(data);
        $("#editModal").modal("show");
      },
    });
  });

  // close modal
  $(".closeModalBtn").on("click", function () {
    $("#editModal").modal("hide");
  });

  // update question edit
  $("#updateQuestionEdit").on("click", function () {
    const updateId = $("#edit_id").val();
    const updateQuestion = $("#updateQuestion").val();
    const updateAnswer = $("#updateAnswer").val();

    $.ajax({
      type: "post",
      url: "includes/ajax.php",
      data: {
        id: updateId,
        question: updateQuestion,
        answer: updateAnswer,
        updateQuestionBtn: "updateQuestionBtn",
      },
      success: function (update) {
        if (update == 200) {
          callQuestionSuccess();
        } else {
          callError();
        }
      },
    });
  });

  // Delete Frequently asked Question
  $(".QuesDeleteBtn").on("click", function () {
    const deleteId = $(this).val();
    Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete it!",
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          type: "post",
          url: "includes/delete.php",
          data: {
            id: deleteId,
            questionDeleteBtn: "questionDeleteBtn",
          },
          success: function (deleteResponse) {
            if (deleteResponse == 200) {
              callDeleteSuccess();
            } else {
              callError();
            }
          },
        });
      }
    });
  });

  // delete services
  $(".deleteService").on("click", function () {
    const id = $(this).val();
    Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete it!",
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          type: "post",
          url: "includes/delete.php",
          data: {
            id: id,
            deleteServiceBtn: "deleteServiceBtn",
          },
          success: function (deleteServiceResponse) {
            if (deleteServiceResponse == 200) {
              callDeleteSuccess();
            } else {
              callError();
            }
          },
        });
      }
    });
  });

  // service active and inactive code
  $(".serviceInactiveBtn").on("click", function () {
    const id = $(this).val();
    Swal.fire({
      title: "Are you sure?",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Confirm",
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          type: "post",
          url: "includes/ajax.php",
          data: {
            id: id,
            serviceInactive: "serviceInactive",
          },
          success: function (deleteServiceResponse) {
            if (deleteServiceResponse == 200) {
              Swal2.fire({
                icon: "success",
                title: "Success",
              }).then(() => {
                location.reload();
              });
            } else {
              callError();
            }
          },
        });
      }
    });
  });

  $(".serviceActiveBtn").on("click", function () {
    const id = $(this).val();
    Swal.fire({
      title: "Are you sure?",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Confirm",
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          type: "post",
          url: "includes/ajax.php",
          data: {
            id: id,
            serviceActive: "serviceActive",
          },
          success: function (deleteServiceResponse) {
            if (deleteServiceResponse == 200) {
              Swal2.fire({
                icon: "success",
                title: "Success",
              }).then(() => {
                location.reload();
              });
            } else {
              callError();
            }
          },
        });
      }
    });
  });

  // delete members
  $(".deleteMember").on("click", function () {
    const id = $(this).val();
    Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete it!",
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          type: "post",
          url: "includes/delete.php",
          data: {
            id: id,
            deleteMembersBtn: "deleteMembersBtn",
          },
          success: function (deleteMembersResponse) {
            if (deleteMembersResponse == 200) {
              callDeleteSuccess();
            } else {
              callError();
            }
          },
        });
      }
    });
  });
  // toggle multiple image add btn
  $("#addMultipleImage").on("click", function () {
    $("#toggleDiv").toggle(300);
  });
  $("#addMultipleImage2").on("click", function () {
    $("#toggleDiv2").toggle(300);
  });
  $(".editMultipleBtn").on("click", function () {
    $(".editMultipleInput").toggle();
  });

  //delete projects
  $(".deleteProject").on("click", function () {
    const id = $(this).val();
    Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete it!",
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          type: "post",
          url: "includes/delete.php",
          data: {
            id: id,
            deleteProjectBtn: "deleteProjectBtn",
          },
          success: function (DeleteProjectResponse) {
            if (DeleteProjectResponse == 200) {
              callDeleteSuccess();
            } else {
              callError();
            }
          },
        });
      }
    });
  });

  // delete project multiple image
  $(".deleteMultipleImage").on("click", function () {
    const id = $(this).val();
    Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete it!",
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          type: "post",
          url: "includes/delete.php",
          data: {
            id: id,
            deleteMultipleImage: "deleteMultipleImage",
          },
          success: function (deleteMultipleImageResponse) {
            if (deleteMultipleImageResponse == 200) {
              callDeleteSuccess();
            } else {
              callError();
            }
          },
        });
      }
    });
  });

  // show each image if click on edit btn
  $(".editMultipleImageBtn").on("click", function () {
    const id = $(this).val();
    $.ajax({
      type: "post",
      url: "includes/ajax.php",
      data: {
        id: id,
        multipleImageSearchBtn: "multipleImageSearchBtn",
      },
      success: function (output) {
        $("#editMultipleImageOutput").html(output);
        $("#editModal").modal("show");
      },
    });
  });

  // function
  function multipleImageUpdateSuccess() {
    console.log(50480);
  }
});

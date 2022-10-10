$(() => {
    
    // $("#student_registration").on("submit", (obj) => {
    //     obj.preventDefault();
        
    // })
    // $('.edit').on('shown.bs.modal', function () {
    //     $('#myInput').trigger('focus')
    // })


    $(".add-new").on("click", () => {
        console.log("no");
        location.href = "student";
    })
    $('.edit').on("click", () => {
        console.log("no");
        $(".update-modal").modal();
    });
})

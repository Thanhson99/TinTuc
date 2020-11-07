$("#check-all").change(function() {
    $(".data-table input[type='checkbox']").prop('checked', $(this).prop('checked'));
});

function submitForm(link) {
    var form = $("#frmData");
    form.attr('action', link);
    form.submit();
}

function submitFormComfirm(link) {
    alertify.confirm('Thông báo', 'Bạn chắc chắn muốn xóa ?', function() {
        var form = $("#frmData");
        form.attr('action', link);
        form.submit();
    }, function() {});
}

function ajaxStatus(link) {
    $.ajax({
        url: link,
        dataType: 'json',
        success: function(data) {
            var id = data.id;
            var classRemove = "btn-default";
            var classAdd = "btn-success";
            if (data.status == "inactive") {
                classRemove = "btn-success";
                classAdd = "btn-default";
            }
            var eleCurrent = $("#status-" + id);
            eleCurrent.removeClass(classRemove);
            eleCurrent.addClass(classAdd);
            eleCurrent.attr('onclick', "ajaxStatus('" + data.link + "')");

        },
        error: function() {
            alert('Có lỗi server');
        }
    });

}

function changeColumn(value, t) {
    var text = $(t).text();
    $("#dropdownMenuButton").text(text);
    $("input[name='search_column']").val(value);
}

function changePage(page) {
    var params = ['app', 'controller', 'action'];
    let link = "";
    $.each(params, function(key, value) {
        if (searchParams.has(value)) {
            link += value + "=" + searchParams.get(value) + "&";
        }
    });
    var pathname = "index.php?" + link + "page=" + page;
    window.location.href = pathname;
}

var pathname = window.location.pathname;
let searchParams = new URLSearchParams(window.location.search);

function search() {
    var value = $("input[name='search_value']").val();
    var column = $("input[name='search_column']").val();
    var params = ['app', 'controller', 'action', 'fillter-status'];
    let link = "";
    $.each(params, function(key, value) {
        if (searchParams.has(value)) {
            link += value + "=" + searchParams.get(value) + "&";
        }
    });
    var pathname = "index.php?" + link + "search_value=" + value + "&search_column=" + column;
    window.location.href = pathname;
}

$("select[name='fillter-status']").change(function() {
    var params = ['app', 'controller', 'action', 'search_value', 'search_column'];
    let link = "";
    $.each(params, function(key, value) {
        if (searchParams.has(value)) {
            link += value + "=" + searchParams.get(value) + "&";
        }
    });
    var status = $(this).val();
    var pathname = "index.php?" + link + "fillter-status=" + status;
    window.location.href = pathname;
});

function changeSlug(t) {

    var str = t.value;

    str = str.toLowerCase();
    // xóa dấu
    str = str.replace(/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/g, 'a');
    str = str.replace(/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/g, 'e');
    str = str.replace(/(ì|í|ị|ỉ|ĩ)/g, 'i');
    str = str.replace(/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/g, 'o');
    str = str.replace(/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/g, 'u');
    str = str.replace(/(ỳ|ý|ỵ|ỷ|ỹ)/g, 'y');
    str = str.replace(/(đ)/g, 'd');
    // Xóa ký tự đặc biệt
    str = str.replace(/([^0-9a-z-\s])/g, '');
    // Xóa khoảng trắng thay bằng ký tự -
    str = str.replace(/(\s+)/g, '-');
    // xóa phần dự - ở đầu
    str = str.replace(/^-+/g, '');
    // xóa phần dư - ở cuối
    str = str.replace(/-+$/g, '');

    $("#slug").val(str);
}
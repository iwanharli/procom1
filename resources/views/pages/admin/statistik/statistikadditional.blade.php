<style>
    .chart-selector {
        display: flex;
        gap: 50px;
    }

    .chart-selector>label {
        flex: 1;
        cursor: pointer;
    }
</style>

<script>
    function dataAddRow() {

        console.log("add data id", 0)
        id = Math.floor(Math.random() * 6) + 1
        var elemen = `<tr data-rowid="${id}" id="data-rowid-${id}">
                <td>
                    <input type="text" name="data_label[]"
                        value="" class="form-control" />
                </td>
                <td>
                    <input type="number" name="data_value[]" step="any"
                        value="0" class="form-control" />
                </td>
                <td style="display: flex; gap: 10px">
                    <button type="button" class="btn btn-outline-success"
                        onclick="dataAddRow()">+</button>
                    <button type="button" class="btn btn-outline-danger"
                        onclick="dataDeleteRow(${id})">-</button>
                </td>
            </tr>`

        $('#data-container').append(elemen)

    }

    function dataDeleteRow(id) {
        $('#data-rowid-' + id).remove()
        console.log("remove data id", id)
    }
</script>

{{-- <h1>ASUUUUUUUUUUUUUUUUUUUUUU</h1> --}}


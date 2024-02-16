<?= $this->extend('layouts/emp-master') ?>
<?= $this->section('body-contents') ?>

<main>

<div class="container">
    <h1 class="title">Requset for a Loan</h1>
    <ul class=" emp" style="line-height: none;">
        <li><a href="#">Home</a></li>
        <li class="divider">/</li>
        <li><a href="#" class="active">Loan</a></li>
        <li><a href="#" data-bs-toggle="modal"
                data-bs-target="#exampleModal"
                class="btn btn-sm"
                style="background: var(--skin-color); color: #fff">Apply
                for a loan</a></li>
    </ul>
    <div class="hr"></div>

    <div class="event-table mt-3">
        <div class="color-top" style="left: -22px;"></div>

        <table>
            <thead>
                <tr>
                    <th>Employee's Name</th>
                    <th>Loan Type</th>
                    <th>Duration</th>
                    <th>Loan Status</th>
                    <th>Comment</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Ssewankambo Derick</td>
                    <td>Medical</td>
                    <td>9/02/2024-8/03/2024</td>
                    <td class="text-success">Approved</td>
                    <td>Urgent Loan required...</td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-bg">
            <div class="modal-header">
                <h1 class="modal-title fs-5"
                    id="exampleModalLabel">Apply for a Loan</h1>
                <button type="button" class="btn-close"
                    style="color: var(--text-color);"
                    data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
           <form action="">
            <div class="modal-body">

                <div class="mb-2"
                    style="width: 80%; margin: 0 auto;">
                    <label class="form-label">Loan Type</label>
                    <select class="form-select">
                        <option selected>Select Loan
                            Type</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>

                <div class="mb-2"
                    style="width: 80%; margin: 0 auto;">
                    <label for="exampleFormControlTextarea1"
                        class="form-label">Comment</label>
                    <textarea
                        class="form-control"
                        id="exampleFormControlTextarea1"
                        rows="3"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button"
                    class="btn btn-secondary btn-sm"
                    data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-sm"
                    style="background: var(--skin-color); color: #fff">Apply</button>
            </div>
           </form>
        </div>
    </div>
</div>

</main>


<?= $this->endSection() ?>
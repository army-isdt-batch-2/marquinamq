@php $active = 'payslip' @endphp
@extends('layout.main')
@section('title', 'Payslips')
@section('title', $active)
@section('content')
    <div style="margin-top: -1%;" class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row">
                    {{-- <h3>List of Payslips</h3>
              <hr> --}}
                    <div class="container-fluid"
                        style="margin:1%; padding:1%; width:98%; margin-top: 2%; background-color: white;">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="c-table-responsive@desktop">
                                    <div class="payslip-card">
                                        <div class="company-info">
                                            <div class="info">
                                                <p>
                                                    <b>CYAN Management Corporation</b><br>
                                                    <small>8th Floor, DPC Place Building, 2322, Chino Roces Avenue, Makati,
                                                        1200 Metro Manila</small><br>
                                                    <small><i>(02) 889 8862</i></small>
                                                </p>
                                            </div>
                                            <div class="logo">
                                                <img
                                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQAQ5adOaK_2jEV8Opq4ehdGdmLvRnHCf5iJA&usqp=CAU">
                                            </div>
                                        </div>
                                        <div class="employee-info">
                                            <div class="left">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td class="info head">Employee ID</td>
                                                            <td class="value">CYAN2018000001</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">Fullname</td>
                                                            <td class="value">Cresse Kenneth Batan Abenojar</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">Address</td>
                                                            <td class="value">Unit B, Cornerstone Residences, Concepcion
                                                                DOs, Marikina Heights, Marikina City</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">Contact</td>
                                                            <td class="value">09561839304</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">Department</td>
                                                            <td class="value">1</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="right">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td class="info head">Designation</td>
                                                            <td class="value">Senior Software Developer</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">TAX</td>
                                                            <td class="value">TAX7</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">SSS</td>
                                                            <td class="value">SSS5</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">PHILHEALTH</td>
                                                            <td class="value">PH6</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">PAGIBIG</td>
                                                            <td class="value">PGBG4</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="summary-info">
                                            <div class="card">
                                                <span class="title">Mandatory Deductions</span>
                                                <div class="data">
                                                    <div class="meta">SSS</div>
                                                    <div class="value">P 1,163.00</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Philhealth</div>
                                                    <div class="value">P 337.50</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Pagibig</div>
                                                    <div class="value">P 200.00</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Tax</div>
                                                    <div class="value">P 5.00</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">-</div>
                                                    <div class="value">-</div>
                                                </div>
                                                <div class="total">
                                                    <div class="meta"><b>Total</b></div>
                                                    <div class="value">P 1,705.50</div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <span class="title">Loan Deductions</span>
                                                <div class="data">
                                                    <div class="meta">Loan Type</div>
                                                    <div class="value">-</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Total</div>
                                                    <div class="value">-</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Monthly</div>
                                                    <div class="value">-</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Balance</div>
                                                    <div class="value">-</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Deduction</div>
                                                    <div class="value">-</div>
                                                </div>
                                                <div class="total">
                                                    <div class="meta"><b>Total</b></div>
                                                    <div class="value">-</div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <span class="title">Rate</span>
                                                <div class="data">
                                                    <div class="meta">Basic Rate</div>
                                                    <div class="value">P 6,000.50</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Regular Hours</div>
                                                    <div class="value"> -8 Hrs</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">OT Hours</div>
                                                    <div class="value"> 0 Hrs</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Night Diff Hours</div>
                                                    <div class="value"> 0 Hrs</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Total Hours</div>
                                                    <div class="value"><b>-8 Hrs</b></div>
                                                </div>
                                                <div class="total">
                                                    <div class="meta"><b>Total</b></div>
                                                    <div class="value">P -6,000.50</div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <span class="title">Earnings</span>
                                                <div class="data">
                                                    <div class="meta">Gross Earnings</div>
                                                    <div class="value">P -6,000.50</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Mandatory Deductions</div>
                                                    <div class="value">P 1,705.50</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Loan Deductions</div>
                                                    <div class="value">P 0.00</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">-</div>
                                                    <div class="value">-</div>
                                                </div>
                                                <div class="total">
                                                    <div class="meta"><b>Total Profit</b></div>
                                                    <div class="value overall">P -7,706.00</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="payroll-summary">
                                            <p>
                                                <b>Payroll ID : <small class="val">2021000029</small></b>
                                            </p>
                                            <p class="right">
                                                <b>Date issued : <small class="val">Feb 12, 2021</small></b>
                                            </p>
                                            <p></p>
                                            <p>
                                                <b>Cut-off : <small class="val">Feb 12, 2021 - Feb 13, 2021</small></b>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="payslip-card">
                                        <div class="company-info">
                                            <div class="info">
                                                <p>
                                                    <b>CYAN Management Corporation</b><br>
                                                    <small>8th Floor, DPC Place Building, 2322, Chino Roces Avenue, Makati,
                                                        1200 Metro Manila</small><br>
                                                    <small><i>(02) 889 8862</i></small>
                                                </p>
                                            </div>
                                            <div class="logo">
                                                <img
                                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQAQ5adOaK_2jEV8Opq4ehdGdmLvRnHCf5iJA&usqp=CAU">
                                            </div>
                                        </div>
                                        <div class="employee-info">
                                            <div class="left">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td class="info head">Employee ID</td>
                                                            <td class="value">CYAN2018000002</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">Fullname</td>
                                                            <td class="value">John Doe Cruz</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">Address</td>
                                                            <td class="value">PH</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">Contact</td>
                                                            <td class="value">999999969</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">Department</td>
                                                            <td class="value">8</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="right">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td class="info head">Designation</td>
                                                            <td class="value">Creative Director</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">TAX</td>
                                                            <td class="value">TAX7</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">SSS</td>
                                                            <td class="value">SSS2</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">PHILHEALTH</td>
                                                            <td class="value">PH3</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">PAGIBIG</td>
                                                            <td class="value">PGBG1</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="summary-info">
                                            <div class="card">
                                                <span class="title">Mandatory Deductions</span>
                                                <div class="data">
                                                    <div class="meta">SSS</div>
                                                    <div class="value">P 663.00</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Philhealth</div>
                                                    <div class="value">P 137.50</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Pagibig</div>
                                                    <div class="value">P 100.00</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Tax</div>
                                                    <div class="value">P 5.00</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">-</div>
                                                    <div class="value">-</div>
                                                </div>
                                                <div class="total">
                                                    <div class="meta"><b>Total</b></div>
                                                    <div class="value">P 905.50</div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <span class="title">Loan Deductions</span>
                                                <div class="data">
                                                    <div class="meta">Loan Type</div>
                                                    <div class="value">-</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Total</div>
                                                    <div class="value">-</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Monthly</div>
                                                    <div class="value">-</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Balance</div>
                                                    <div class="value">-</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Deduction</div>
                                                    <div class="value">-</div>
                                                </div>
                                                <div class="total">
                                                    <div class="meta"><b>Total</b></div>
                                                    <div class="value">-</div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <span class="title">Rate</span>
                                                <div class="data">
                                                    <div class="meta">Basic Rate</div>
                                                    <div class="value">P 1,068.50</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Regular Hours</div>
                                                    <div class="value"> 0 Hrs</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">OT Hours</div>
                                                    <div class="value"> 0 Hrs</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Night Diff Hours</div>
                                                    <div class="value"> 0 Hrs</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Total Hours</div>
                                                    <div class="value"><b>0 Hrs</b></div>
                                                </div>
                                                <div class="total">
                                                    <div class="meta"><b>Total</b></div>
                                                    <div class="value">P 0.00</div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <span class="title">Earnings</span>
                                                <div class="data">
                                                    <div class="meta">Gross Earnings</div>
                                                    <div class="value">P 0.00</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Mandatory Deductions</div>
                                                    <div class="value">P 905.50</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Loan Deductions</div>
                                                    <div class="value">P 0.00</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">-</div>
                                                    <div class="value">-</div>
                                                </div>
                                                <div class="total">
                                                    <div class="meta"><b>Total Profit</b></div>
                                                    <div class="value overall">P -905.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="payroll-summary">
                                            <p>
                                                <b>Payroll ID : <small class="val">2021000029</small></b>
                                            </p>
                                            <p class="right">
                                                <b>Date issued : <small class="val">Feb 12, 2021</small></b>
                                            </p>
                                            <p></p>
                                            <p>
                                                <b>Cut-off : <small class="val">Feb 12, 2021 - Feb 13, 2021</small></b>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="payslip-card">
                                        <div class="company-info">
                                            <div class="info">
                                                <p>
                                                    <b>CYAN Management Corporation</b><br>
                                                    <small>8th Floor, DPC Place Building, 2322, Chino Roces Avenue, Makati,
                                                        1200 Metro Manila</small><br>
                                                    <small><i>(02) 889 8862</i></small>
                                                </p>
                                            </div>
                                            <div class="logo">
                                                <img
                                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQAQ5adOaK_2jEV8Opq4ehdGdmLvRnHCf5iJA&usqp=CAU">
                                            </div>
                                        </div>
                                        <div class="employee-info">
                                            <div class="left">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td class="info head">Employee ID</td>
                                                            <td class="value">CYAN2018000003</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">Fullname</td>
                                                            <td class="value">Nadine Alba Lustre</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">Address</td>
                                                            <td class="value">0345 Kamagong st. Cor Chino Roces , Makati
                                                                City</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">Contact</td>
                                                            <td class="value">09561839304</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">Department</td>
                                                            <td class="value">4</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="right">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td class="info head">Designation</td>
                                                            <td class="value">Accountant</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">TAX</td>
                                                            <td class="value">TAX7</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">SSS</td>
                                                            <td class="value">SSS5</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">PHILHEALTH</td>
                                                            <td class="value">PH3</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">PAGIBIG</td>
                                                            <td class="value">PGBG4</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="summary-info">
                                            <div class="card">
                                                <span class="title">Mandatory Deductions</span>
                                                <div class="data">
                                                    <div class="meta">SSS</div>
                                                    <div class="value">P 1,163.00</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Philhealth</div>
                                                    <div class="value">P 137.50</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Pagibig</div>
                                                    <div class="value">P 200.00</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Tax</div>
                                                    <div class="value">P 5.00</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">-</div>
                                                    <div class="value">-</div>
                                                </div>
                                                <div class="total">
                                                    <div class="meta"><b>Total</b></div>
                                                    <div class="value">P 1,505.50</div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <span class="title">Loan Deductions</span>
                                                <div class="data">
                                                    <div class="meta">Loan Type</div>
                                                    <div class="value">Car Loan</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Total</div>
                                                    <div class="value">500.00</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Paid</div>
                                                    <div class="value">900.00</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Balance</div>
                                                    <div class="value">-400.00</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Deduction</div>
                                                    <div class="value">100.00</div>
                                                </div>
                                                <div class="total">
                                                    <div class="meta"><b>Total</b></div>
                                                    <div class="value">P 100.00</div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <span class="title">Rate</span>
                                                <div class="data">
                                                    <div class="meta">Basic Rate</div>
                                                    <div class="value">P 486.00</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Regular Hours</div>
                                                    <div class="value"> 0 Hrs</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">OT Hours</div>
                                                    <div class="value"> 0 Hrs</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Night Diff Hours</div>
                                                    <div class="value"> 0 Hrs</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Total Hours</div>
                                                    <div class="value"><b>0 Hrs</b></div>
                                                </div>
                                                <div class="total">
                                                    <div class="meta"><b>Total</b></div>
                                                    <div class="value">P 0.00</div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <span class="title">Earnings</span>
                                                <div class="data">
                                                    <div class="meta">Gross Earnings</div>
                                                    <div class="value">P 0.00</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Mandatory Deductions</div>
                                                    <div class="value">P 1,505.50</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Loan Deductions</div>
                                                    <div class="value">P 0.00</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">-</div>
                                                    <div class="value">-</div>
                                                </div>
                                                <div class="total">
                                                    <div class="meta"><b>Total Profit</b></div>
                                                    <div class="value overall">P 0.00</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="payroll-summary">
                                            <p>
                                                <b>Payroll ID : <small class="val">2021000029</small></b>
                                            </p>
                                            <p class="right">
                                                <b>Date issued : <small class="val">Feb 12, 2021</small></b>
                                            </p>
                                            <p></p>
                                            <p>
                                                <b>Cut-off : <small class="val">Feb 12, 2021 - Feb 13, 2021</small></b>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="payslip-card">
                                        <div class="company-info">
                                            <div class="info">
                                                <p>
                                                    <b>CYAN Management Corporation</b><br>
                                                    <small>8th Floor, DPC Place Building, 2322, Chino Roces Avenue, Makati,
                                                        1200 Metro Manila</small><br>
                                                    <small><i>(02) 889 8862</i></small>
                                                </p>
                                            </div>
                                            <div class="logo">
                                                <img
                                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQAQ5adOaK_2jEV8Opq4ehdGdmLvRnHCf5iJA&usqp=CAU">
                                            </div>
                                        </div>
                                        <div class="employee-info">
                                            <div class="left">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td class="info head">Employee ID</td>
                                                            <td class="value">CYAN2018000004</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">Fullname</td>
                                                            <td class="value">Mae Bae Sae</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">Address</td>
                                                            <td class="value">Manila City</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">Contact</td>
                                                            <td class="value">0999335461</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">Department</td>
                                                            <td class="value">1</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="right">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td class="info head">Designation</td>
                                                            <td class="value">Assistant</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">TAX</td>
                                                            <td class="value">TAX7</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">SSS</td>
                                                            <td class="value">SSS2</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">PHILHEALTH</td>
                                                            <td class="value">PH3</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">PAGIBIG</td>
                                                            <td class="value">PGBG1</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="summary-info">
                                            <div class="card">
                                                <span class="title">Mandatory Deductions</span>
                                                <div class="data">
                                                    <div class="meta">SSS</div>
                                                    <div class="value">P 663.00</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Philhealth</div>
                                                    <div class="value">P 137.50</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Pagibig</div>
                                                    <div class="value">P 100.00</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Tax</div>
                                                    <div class="value">P 5.00</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">-</div>
                                                    <div class="value">-</div>
                                                </div>
                                                <div class="total">
                                                    <div class="meta"><b>Total</b></div>
                                                    <div class="value">P 905.50</div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <span class="title">Loan Deductions</span>
                                                <div class="data">
                                                    <div class="meta">Loan Type</div>
                                                    <div class="value">Car Loan</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Total</div>
                                                    <div class="value">5,350.00</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Paid</div>
                                                    <div class="value">0.00</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Balance</div>
                                                    <div class="value">5,350.00</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Deduction</div>
                                                    <div class="value">892.00</div>
                                                </div>
                                                <div class="total">
                                                    <div class="meta"><b>Total</b></div>
                                                    <div class="value">P 892.00</div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <span class="title">Rate</span>
                                                <div class="data">
                                                    <div class="meta">Basic Rate</div>
                                                    <div class="value">P 750.00</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Regular Hours</div>
                                                    <div class="value"> 0 Hrs</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">OT Hours</div>
                                                    <div class="value"> 0 Hrs</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Night Diff Hours</div>
                                                    <div class="value"> 0 Hrs</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Total Hours</div>
                                                    <div class="value"><b>0 Hrs</b></div>
                                                </div>
                                                <div class="total">
                                                    <div class="meta"><b>Total</b></div>
                                                    <div class="value">P 0.00</div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <span class="title">Earnings</span>
                                                <div class="data">
                                                    <div class="meta">Gross Earnings</div>
                                                    <div class="value">P 0.00</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Mandatory Deductions</div>
                                                    <div class="value">P 905.50</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Loan Deductions</div>
                                                    <div class="value">P 0.00</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">-</div>
                                                    <div class="value">-</div>
                                                </div>
                                                <div class="total">
                                                    <div class="meta"><b>Total Profit</b></div>
                                                    <div class="value overall">P 0.00</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="payroll-summary">
                                            <p>
                                                <b>Payroll ID : <small class="val">2021000029</small></b>
                                            </p>
                                            <p class="right">
                                                <b>Date issued : <small class="val">Feb 12, 2021</small></b>
                                            </p>
                                            <p></p>
                                            <p>
                                                <b>Cut-off : <small class="val">Feb 12, 2021 - Feb 13, 2021</small></b>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="payslip-card">
                                        <div class="company-info">
                                            <div class="info">
                                                <p>
                                                    <b>CYAN Management Corporation</b><br>
                                                    <small>8th Floor, DPC Place Building, 2322, Chino Roces Avenue, Makati,
                                                        1200 Metro Manila</small><br>
                                                    <small><i>(02) 889 8862</i></small>
                                                </p>
                                            </div>
                                            <div class="logo">
                                                <img
                                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQAQ5adOaK_2jEV8Opq4ehdGdmLvRnHCf5iJA&usqp=CAU">
                                            </div>
                                        </div>
                                        <div class="employee-info">
                                            <div class="left">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td class="info head">Employee ID</td>
                                                            <td class="value">CYAN2021000005</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">Fullname</td>
                                                            <td class="value">Test V Ting</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">Address</td>
                                                            <td class="value">Taguig</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">Contact</td>
                                                            <td class="value">091231231</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">Department</td>
                                                            <td class="value">1</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="right">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td class="info head">Designation</td>
                                                            <td class="value">Comp Programmer</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">TAX</td>
                                                            <td class="value">TAX7</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">SSS</td>
                                                            <td class="value">SSS2</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">PHILHEALTH</td>
                                                            <td class="value">PH3</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">PAGIBIG</td>
                                                            <td class="value">PGBG1</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="summary-info">
                                            <div class="card">
                                                <span class="title">Mandatory Deductions</span>
                                                <div class="data">
                                                    <div class="meta">SSS</div>
                                                    <div class="value">P 663.00</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Philhealth</div>
                                                    <div class="value">P 137.50</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Pagibig</div>
                                                    <div class="value">P 100.00</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Tax</div>
                                                    <div class="value">P 5.00</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">-</div>
                                                    <div class="value">-</div>
                                                </div>
                                                <div class="total">
                                                    <div class="meta"><b>Total</b></div>
                                                    <div class="value">P 905.50</div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <span class="title">Loan Deductions</span>
                                                <div class="data">
                                                    <div class="meta">Loan Type</div>
                                                    <div class="value">Car Loan</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Total</div>
                                                    <div class="value">10,700.00</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Paid</div>
                                                    <div class="value">0.00</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Balance</div>
                                                    <div class="value">10,700.00</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Deduction</div>
                                                    <div class="value">1,783.00</div>
                                                </div>
                                                <div class="total">
                                                    <div class="meta"><b>Total</b></div>
                                                    <div class="value">P 1,783.00</div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <span class="title">Rate</span>
                                                <div class="data">
                                                    <div class="meta">Basic Rate</div>
                                                    <div class="value">P 1,000.00</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Regular Hours</div>
                                                    <div class="value"> 0 Hrs</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">OT Hours</div>
                                                    <div class="value"> 0 Hrs</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Night Diff Hours</div>
                                                    <div class="value"> 0 Hrs</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Total Hours</div>
                                                    <div class="value"><b>0 Hrs</b></div>
                                                </div>
                                                <div class="total">
                                                    <div class="meta"><b>Total</b></div>
                                                    <div class="value">P 0.00</div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <span class="title">Earnings</span>
                                                <div class="data">
                                                    <div class="meta">Gross Earnings</div>
                                                    <div class="value">P 0.00</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Mandatory Deductions</div>
                                                    <div class="value">P 905.50</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Loan Deductions</div>
                                                    <div class="value">P 0.00</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">-</div>
                                                    <div class="value">-</div>
                                                </div>
                                                <div class="total">
                                                    <div class="meta"><b>Total Profit</b></div>
                                                    <div class="value overall">P 0.00</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="payroll-summary">
                                            <p>
                                                <b>Payroll ID : <small class="val">2021000029</small></b>
                                            </p>
                                            <p class="right">
                                                <b>Date issued : <small class="val">Feb 12, 2021</small></b>
                                            </p>
                                            <p></p>
                                            <p>
                                                <b>Cut-off : <small class="val">Feb 12, 2021 - Feb 13, 2021</small></b>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="payslip-card">
                                        <div class="company-info">
                                            <div class="info">
                                                <p>
                                                    <b>CYAN Management Corporation</b><br>
                                                    <small>8th Floor, DPC Place Building, 2322, Chino Roces Avenue, Makati,
                                                        1200 Metro Manila</small><br>
                                                    <small><i>(02) 889 8862</i></small>
                                                </p>
                                            </div>
                                            <div class="logo">
                                                <img
                                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQAQ5adOaK_2jEV8Opq4ehdGdmLvRnHCf5iJA&usqp=CAU">
                                            </div>
                                        </div>
                                        <div class="employee-info">
                                            <div class="left">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td class="info head">Employee ID</td>
                                                            <td class="value">CYAN2021000006</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">Fullname</td>
                                                            <td class="value">juan tamad tamad</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">Address</td>
                                                            <td class="value">asdfg</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">Contact</td>
                                                            <td class="value">1234</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">Department</td>
                                                            <td class="value">4</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="right">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td class="info head">Designation</td>
                                                            <td class="value">qwert</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">TAX</td>
                                                            <td class="value">TAX7</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">SSS</td>
                                                            <td class="value">SSS2</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">PHILHEALTH</td>
                                                            <td class="value">PH14</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info head">PAGIBIG</td>
                                                            <td class="value">PGBG1</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="summary-info">
                                            <div class="card">
                                                <span class="title">Mandatory Deductions</span>
                                                <div class="data">
                                                    <div class="meta">SSS</div>
                                                    <div class="value">P 663.00</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Philhealth</div>
                                                    <div class="value">P 12.00</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Pagibig</div>
                                                    <div class="value">P 100.00</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Tax</div>
                                                    <div class="value">P 5.00</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">-</div>
                                                    <div class="value">-</div>
                                                </div>
                                                <div class="total">
                                                    <div class="meta"><b>Total</b></div>
                                                    <div class="value">P 780.00</div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <span class="title">Loan Deductions</span>
                                                <div class="data">
                                                    <div class="meta">Loan Type</div>
                                                    <div class="value">-</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Total</div>
                                                    <div class="value">-</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Monthly</div>
                                                    <div class="value">-</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Balance</div>
                                                    <div class="value">-</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Deduction</div>
                                                    <div class="value">-</div>
                                                </div>
                                                <div class="total">
                                                    <div class="meta"><b>Total</b></div>
                                                    <div class="value">-</div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <span class="title">Rate</span>
                                                <div class="data">
                                                    <div class="meta">Basic Rate</div>
                                                    <div class="value">P 123.00</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Regular Hours</div>
                                                    <div class="value"> 0 Hrs</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">OT Hours</div>
                                                    <div class="value"> 0 Hrs</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Night Diff Hours</div>
                                                    <div class="value"> 0 Hrs</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Total Hours</div>
                                                    <div class="value"><b>0 Hrs</b></div>
                                                </div>
                                                <div class="total">
                                                    <div class="meta"><b>Total</b></div>
                                                    <div class="value">P 0.00</div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <span class="title">Earnings</span>
                                                <div class="data">
                                                    <div class="meta">Gross Earnings</div>
                                                    <div class="value">P 0.00</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Mandatory Deductions</div>
                                                    <div class="value">P 780.00</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">Loan Deductions</div>
                                                    <div class="value">P 0.00</div>
                                                </div>
                                                <div class="data">
                                                    <div class="meta">-</div>
                                                    <div class="value">-</div>
                                                </div>
                                                <div class="total">
                                                    <div class="meta"><b>Total Profit</b></div>
                                                    <div class="value overall">P -780.00</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="payroll-summary">
                                            <p>
                                                <b>Payroll ID : <small class="val">2021000029</small></b>
                                            </p>
                                            <p class="right">
                                                <b>Date issued : <small class="val">Feb 12, 2021</small></b>
                                            </p>
                                            <p></p>
                                            <p>
                                                <b>Cut-off : <small class="val">Feb 12, 2021 - Feb 13, 2021</small></b>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <style type="text/css">
                .payslip-card {
                    width: 100%;
                    float: left;
                    padding: 2%;
                }

                .payslip-card .company-info {
                    width: 100%;
                    float: left;
                    border-bottom: 1px solid #333;
                    padding-bottom: 2%;
                }

                .payslip-card .company-info .logo {
                    width: 10%;
                    float: left;
                }

                .payslip-card .company-info .logo img {
                    width: 70%;
                    float: right;
                }

                .payslip-card .company-info .info {
                    width: 90%;
                    float: left;
                }

                .payslip-card .company-info .info p b {
                    font-size: 1.2em !important;
                }

                .payslip-card .employee-info {
                    width: 100%;
                    float: left;
                    padding: 0%;
                    border-left: 1px solid #333;
                    border-right: 1px solid #333;
                    border-bottom: 1px solid #333;
                }

                .payslip-card .employee-info .left {
                    width: 50%;
                    float: left;
                    border-right: 1px solid #333;
                }

                .payslip-card .employee-info .right {
                    width: 50%;
                    float: left;
                }

                .payslip-card .employee-info .left table {
                    width: 100%;
                }

                .payslip-card .employee-info .right table {
                    width: 100%;
                }

                .payslip-card .employee-info .right table tr .head {
                    font-weight: bolder;
                }

                .payslip-card .employee-info .left table tr td {
                    font-size: 0.7em;
                }

                .payslip-card .employee-info .right table tr td {
                    font-size: 0.7em;
                }

                .payslip-card .employee-info .right table tr .info {
                    width: 40%;
                }

                .payslip-card .employee-info .right table tr .value {
                    width: 60%;
                }

                .payslip-card .employee-info .left table tr .info {
                    width: 30%;
                }

                .payslip-card .employee-info .left table tr .value {
                    width: 70%;
                }

                .overall {
                    font-size: 1.5em !important;
                }

                .payslip-card {
                    border-bottom: 1px solid #333;
                }

                .payslip-card .payroll-summary {
                    width: 100%;
                    float: left;
                }

                .payslip-card .payroll-summary .right {
                    float: right;
                    font-size: 0.8em;
                }

                .payslip-card .payroll-summary p {
                    font-size: 0.8em;
                }

                .payslip-card .payroll-summary p b .val {
                    border-bottom: 1px solid #333;
                    width:
                }

                .payslip-card .summary-info {
                    width: 100%;
                    float: left;
                    border-right: 1px solid #333;
                    border-left: 1px solid #333;
                    border-bottom: 1px solid #333;
                }

                .payslip-card .summary-info .card {
                    height: 9em;
                    padding: 0.2%;
                    width: 25%;
                    float: left;
                    background-color: xred;
                    border-right: 1px solid #333;
                }

                .payslip-card .summary-info .card .title {
                    font-weight: bolder;
                }

                .payslip-card .summary-info .card .data {
                    width: 100%;
                    float: left;
                }

                .payslip-card .summary-info .card .data .meta {
                    width: 50%;
                    float: left;
                    text-align: left;
                    font-size: 0.7em;
                    font-weight: bolder;
                }

                .payslip-card .summary-info .card .data .value {
                    width: 50%;
                    float: left;
                    text-align: right;
                    font-size: 0.7em;
                }

                .payslip-card .summary-info .card .total {
                    width: 100%;
                    float: left;
                    border-top: 1px solid #333;
                }

                .payslip-card .summary-info .card .total .meta {
                    width: 50%;
                    float: left;
                    text-align: left;
                    font-size: 0.7em;
                    font-weight: bolder;
                }

                .payslip-card .summary-info .card .total .value {
                    width: 50%;
                    float: left;
                    text-align: right;
                    font-size: 0.8em;
                    color: red;
                }

                @media print {
                    .c-navbar {
                        display: none;
                    }
                }

            </style>
        @endsection

<?php
    require 'vendor/autoload.php';
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
    use PhpOffice\PhpSpreadsheet\Style\Border;
    use PhpOffice\PhpSpreadsheet\Style\Fill;

    include 'koneksi.php';

    $sql = "SELECT * FROM mahasiswa";
    $result = $conn->query($sql);

    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Set Judul
    $sheet->setCellValue('A1', 'DATA BEASISWA');
    $sheet->mergeCells('A1:J1');
    $sheet->getStyle('A1')->getFont()->setBold(true)->setSize(14);
    $sheet->getRowDimension('1')->setRowHeight(30);
    $sheet->getStyle('A1')->getAlignment()->setHorizontal('center');

    // Set header values
    $headers = ['ID', 'FOTO', 'NIM', 'NAMA', 'EMAIL', 'NO. HP', 'SEMESTER', 'IPK', 'JENIS BEASISWA', 'STATUS'];
    $columns = range('A', 'J');
    foreach ($headers as $index => $header) {
        $sheet->setCellValue($columns[$index] . '2', $header);
    }

    // Style
    $headerStyle = [
        'font' => [
            'bold' => true,
        ],
        'borders' => [
            'allBorders' => [
                'borderStyle' => Border::BORDER_THIN,
            ],
        ],
        'fill' => [
            'fillType' => Fill::FILL_SOLID,
            'startColor' => [
                'argb' => 'FFFFE0',
            ],
        ],
        'alignment' => [
        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
        'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
        ],
    ];

    $sheet->getStyle('A2:J2')->applyFromArray($headerStyle);

     // Set auto width
    foreach ($columns as $column) {
        $sheet->getColumnDimension($column)->setAutoSize(true);
    }

    $sheet->setCellValue('A2', 'ID');
    $sheet->setCellValue('B2', 'FOTO');
    $sheet->setCellValue('C2', 'NIM');
    $sheet->setCellValue('D2', 'NAMA');
    $sheet->setCellValue('E2', 'EMAIL');
    $sheet->setCellValue('F2', 'NO. HP');
    $sheet->setCellValue('G2', 'SEMESTER');
    $sheet->setCellValue('H2', 'IPK');
    $sheet->setCellValue('I2', 'JENIS BEASISWA');
    $sheet->setCellValue('J2', 'STATUS');

    if ($result->num_rows > 0) {
        $rowNumber = 3;
        while($row = $result->fetch_assoc()) {
            $sheet->setCellValue('A' . $rowNumber, $row['id']);
            $sheet->setCellValue('B' . $rowNumber, $row['foto']);
            $sheet->setCellValue('C' . $rowNumber, $row['nim']);
            $sheet->setCellValue('D' . $rowNumber, $row['nama']);
            $sheet->setCellValue('E' . $rowNumber, $row['email']);
            $sheet->setCellValue('F' . $rowNumber, $row['nohp']);
            $sheet->setCellValue('G' . $rowNumber, $row['semester']);
            $sheet->setCellValue('H' . $rowNumber, $row['ipk']);
            $sheet->setCellValue('I' . $rowNumber, $row['jns_beasiswa']);
            $sheet->setCellValue('J' . $rowNumber, $row['status_ajuan']);
            $rowNumber++;
        }
    }

    // Apply border to all data cells
    $dataStyle = [
        'borders' => [
            'allBorders' => [
                'borderStyle' => Border::BORDER_THIN,
            ],
        ],
    ];
    $sheet->getStyle('A2:J' . ($rowNumber - 1))->applyFromArray($dataStyle);

    $writer = new Xlsx($spreadsheet);
    $fileName = 'data_beasiswa.xlsx';

    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="' . urlencode($fileName) . '"');
    header('Cache-Control: max-age=0');

    // Tulis file ke output
    $writer->save('php://output');
    exit();
?>
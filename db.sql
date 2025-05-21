DROP TABLE IF EXISTS pasien;

CREATE TABLE pasien (
    nama_pasien VARCHAR(50),
    no_rek_medis VARCHAR(20) PRIMARY KEY,
    poli VARCHAR(20),
    tgl DATE,
    layanan VARCHAR(50),
    klmpk_pasien VARCHAR(20)
);

INSERT INTO pasien (nama_pasien, no_rek_medis, poli, tgl, layanan, klmpk_pasien) VALUES
('bbb', '98022101', 'Umum', '2025-05-20', 'Rawat Inap', 'Asuransi'),
('Agus', '98023020', 'Umum', '2025-05-20', 'Rawat Jalan', 'Pribadi'),
('Zaki', '98023054', 'Umum', '2025-04-15', 'Medical Check Up', 'Asuransi'),
('aaa', '98023144', 'Umum', '2025-04-10', 'Medical Check Up', 'Asuransi'),
('Beni', '98023155', 'Umum', '2025-03-25', 'Rawat Inap', 'Pribadi'),
('Asep', '98023177', 'Mata', '2025-03-10', 'Rawat Jalan', 'BPJS'),
('Ucup', '98023183', 'Anak', '2025-02-20', 'Rawat Jalan', 'Pribadi');

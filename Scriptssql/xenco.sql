-- Crear TB_datos_qx
CREATE TABLE TB_datos_qx (
    quirofano                char(1) PRIMARY KEY,
    profesional              VARCHAR(50) NOT NULL,
    paciente                 VARCHAR(50) NOT NULL,
    ingreso                  VARCHAR(5) NOT NULL,
    evaluacion_pre_anestecia VARCHAR(10) NOT NULL,
    evaluacion_qx            VARCHAR(10) NOT NULL,
    registro_anestecia       VARCHAR(10) NOT NULL,
    post_operatorio          VARCHAR(10) NOT NULL,
    recuperacion             VARCHAR(10) NOT NULL,
    anestecia_en_qx          VARCHAR(10) NOT NULL
);


-- insert datos
INSERT INTO tb_datos_qx (quirofano, profesional, paciente, ingreso, evaluacion_pre_anestecia, evaluacion_qx, registro_anestecia, post_operatorio, recuperacion, anestecia_en_qx) 
VALUES 
(1, 'David Jimenez', 'Lucas', 'En ejecucion', 'No Ejecutado', 'ejecutado', 'ejecutado', 'ejecutado', 'ejecutado', 'No Ejecutado'),
(2, 'Luis Lopez', 'Lucas', 'ejecutado', 'No Ejecutado', 'ejecutado', 'ejecutado', 'No Ejecutado', 'ejecutado', 'No Ejecutado'),
(3, 'Luis Lopez', 'Lucas', 'ejecutado', 'No Ejecutado', 'ejecutado', 'ejecutado', 'No Ejecutado', 'ejecutado', 'No Ejecutado'),
(4, 'Luis Lopez', 'Lucas', 'ejecutado', 'No Ejecutado', 'ejecutado', 'No Ejecutado', 'No Ejecutado', 'ejecutado', 'No Ejecutado'),
(5, 'Luis Lopez', 'Lucas', 'ejecutado', 'ejecutado', 'ejecutado', 'ejecutado', 'No Ejecutado', 'ejecutado', 'No Ejecutado');


UPDATE TB_datos_qx SET ingreso = 'En ejecucion';
UPDATE tb_datos_qx SET post_operatorio = 'ejecutado' WHERE quirofano = 1;
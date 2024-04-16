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
------TB de xenco de pruebas
SELECT * FROM TQMOVIMIENTOHC WHERE QM1_FCH_FECHA = '20210414' 
and QM1_COD= '00001020325681' 
and QM1_COD_TIPOATEN = 'X65Q'




QM1_COD	QM1_NUM_CONSE	QM1_COD_TIPOATEN	QM1_EST_CERRAR	QM1_FCH_FECHA	QM1_NUM_MED	QM1_NUM_ENT	QM1_FCH_FIN	QM1_HORA_HORAI	QM1_HORA_HORADIG	QM1_HORA_HORAF	QM1_HORA_DURAC	QM1_COD_DXPP	QM1_COD_DXR1	QM1_EST_ANULADO	QM1_COD_USU	QM1_FCH_DIG	QM1_HORA_DIG	QM1_FCH_INGRESO	QM1_HORA_INGRESO	QM1_FCH_EGRESO	QM1_HORA_EGRESO	QM1_TIPO_CUENTA	QM1_NUM_CUENTA	QM1_EST_CAUSASALE	QM1_CAMA	QM1_EST_PRONO	QM1_TIPO_IN	QM1_NUM_IN	QM1_EST_ING	QM1_NUM_LLEGA	QM1_EST_GEN_QJH	QM1_DUR_CITA	QM1_EST_VAL_OBJ	QM1_COD_SALA	QM1_COD_PLANTIHC	QM1_COD_PLANTIHCI	QM1_EST_CITA	QM1_NUM_CITA	QM1_TIPO_ANE3	QM1_NUM_ANE3	QM1_BAJO_EFE_SUS	QM1_EST_GEN_ADM	QM1_TIPO_ADM	QM1_NUM_ADM	QM1_COD_DX2PP	QM1_HH_KC3	QM1_MM_KC3	QM1_NUM_ESCALA	QM1_HH_INIANE	QM1_MM_INIANE	QM1_AUTO_ANE	QM1_FCH_EVO	QM1_HH_EVO	QM1_MM_EVO	QM1_SS_EVO	QM1_EST_TIPO_OT	QM1_FCH_ANULA	QM1_HORA_ANULA	QM1_EDAD_DIAS	QM1_EDAD_MESES	QM1_EDAD_ANOS	QM1_PERI_CEFA	QM1_FUTURO	QM1_NUM_APGAR_FAMI	QM1_CLA_APGAR_FAMI	QM1_CLA_M_CHAT	QM1_NUM_M_CHAT_CRI	QM1_NUM_M_CHAT_NOR	QM1_NUM_M_CHAT_TOT	QM1_NUM_VALE_C	QM1_NUM_VALE_E	QM1_NUM_VALE_I	QM1_NUM_VALE_V	QM1_NUM_VALE_TOTAL	QM1_CLA_VALE	QM1_VALE_REMI	QM1_VALE_REMI_U	QM1_PERI_ADMI	QM1_CLA_WHOOLEY	QM1_NUM_WHOOLEY	QM1_NUM_GAD_2	QM1_CLA_GAD_2	QM1_NUM_ZARIT	QM1_CLA_ZARIT	QM1_NUM_EPOC	QM1_CLA_EPOC	QM1_NUM_GHAR	QM1_NUM_GHAR_EC	QM1_NUM_GHAR_EMA	QM1_NUM_GHAR_EMM	QM1_NUM_GHAR_CI	QM1_CLA_GHAR	QM1_EDAD_DIAS_RE	QM1_EDAD_MESES_RE	QM1_EDAD_ANOS_RE	QM1_NUM_RQC	QM1_CLA_RQC	QM1_NUM_SRQ_SM	QM1_CLA_SRQ_SM	QM1_NUM_SRQ_PS	QM1_CLA_SRQ_PS	QM1_NUM_SRQ_TC	QM1_CLA_SRQ_TC	QM1_NUM_SRQ_AL	QM1_CLA_SRQ_AL	QM1_NUM_AUDIT	QM1_CLA_AUDIT	QM1_NUM_ASSIST_PR1	QM1_CLA_ASSIST_PR1	QM1_NUM_ASSIST_PR2	QM1_CLA_ASSIST_PR2	QM1_NUM_ASSIST_PR3	QM1_NUM_ASSIST_PR4	QM1_NUM_ASSIST_PR5	QM1_NUM_ASSIST_PR6	QM1_NUM_ASSIST_PR7	QM1_NUM_ASSIST_PR8	QM1_NUM_FINNI	QM1_CLA_FINNI	QM1_CLA_RC_OMS	QM1_LAB_RC_OMS	QM1_NUM_VALE_PERI	QM1_NUM_VALE_ESTR	QM1_COD_ENVIAR_IHCE	QM1_COD_CONSUL_IHCE	QM1_EST_AUDITADA	QM1_COD_USU_AUDITO	QM1_FCH_AUDITO	QM1_HORA_AUDITO	QM1_OBS_AUDITO
123456	208	X65C	S	20240409	792	77	20240409	9271800	9271800	9302645	0	NULL	NULL	NULL	JSG	20240409	0	0	0	0	0	CCH	29652	NULL	105	NULL	X85	30872	I	0	NULL	0	I	9	228	69	NULL	0	NULL	0	NULL	S	X02	30189	NULL	0	0	5	9	27	1	20240409	9	27	18	HO	0	0	8008	267	22,24	0	NULL	0	NULL	NULL	0	0	0	0	0	0	0	0	NULL	NULL	NULL	0	NULL	0	0	NULL	0	NULL	0	NULL	0	0	0	0	0	NULL	8	11	21	0	NULL	0	NULL	0	NULL	0	NULL	0	NULL	0	NULL	0	NULL	0	NULL	0	0	0	0	0	0	0	NULL	NULL	NULL	0	0	NULL	NULL	0	NULL	0	0	NULL
IDENTIFICACION	ATENCION No	TIPO ATENCION	ESTADO ATENCION	FECHA APERTURA ATENCION	PROFESIONAL DE ATENCION	ENTIDAD	FECHA FIN DE ATENCION	HORA INICIO	HORA DIGITACION	HORA FINAL	DURACION	DIAGNOSTICO PRINCIPAL		ANULADO SI /NO	CUENTA HOSPITALARIA	CONSECUTIVO		CAMILLA CIRUGIA		TIPO ATENCION	CONSECUTIVO TIPO						SERVICIO																																																																																																

                                    if ($ev_pre == "X65E") {
                                        if ($mostrar["QM1_FCH_FECHA"] != 0) {
                                            $ev_qx = $mostrar;
                                        } 
                                        echo $ev_qx                               
                                    } ?></td>

--------------------------------------------------------------------
                            <td><?php echo $profesional             ?></td> 

                            <td><?php echo $pasiente                ?></td>

                            <td><?php if ($ingreso = "X65C") {
                              $ingreso["QM1_FCH_FECHA"] == 0;  
                              echo "No Ejecutado";   
                              if ($ingreso["QM1_FCH_FIN"]!=0) {
                                echo "Ejecutado";
                                }                                 
                            } 


                             ?></td> 


                                    
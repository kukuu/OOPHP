CREATE TABLE EMP
(EMPNO  NUMBER(4) CONSTRAINT EMP_PRIM PRIMARY KEY,
ENAME VARCHAR2(10),
JOB VARCHAR2(10),
MGR NUMBER(4),
HIREDATE DATE,
SAL NUMBER(6,2),
COMM NUMBER(6,2),
DEPTNO NUMBER(2))
/

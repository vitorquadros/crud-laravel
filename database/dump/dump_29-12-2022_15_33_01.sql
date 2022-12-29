--
-- PostgreSQL database cluster dump
--

SET default_transaction_read_only = off;

SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;

--
-- Drop databases (except postgres and template1)
--

DROP DATABASE crud_laravel;
DROP DATABASE database_name;




--
-- Drop roles
--

DROP ROLE postgres;


--
-- Roles
--

CREATE ROLE postgres;
ALTER ROLE postgres WITH SUPERUSER INHERIT CREATEROLE CREATEDB LOGIN REPLICATION BYPASSRLS PASSWORD 'SCRAM-SHA-256$4096:fbi/EM+PFD+eA8OGU+l1IQ==$SMYSAi7gIvCMJQZhqk8BXYXQU8AYX+M7hJOzlRkLiq0=:FDlsHIiz7/ffI9nhYwsclhHUZYpceALqmLxTldyI25s=';






--
-- Databases
--

--
-- Database "template1" dump
--

--
-- PostgreSQL database dump
--

-- Dumped from database version 14.2 (Debian 14.2-1.pgdg110+1)
-- Dumped by pg_dump version 14.2 (Debian 14.2-1.pgdg110+1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

UPDATE pg_catalog.pg_database SET datistemplate = false WHERE datname = 'template1';
DROP DATABASE template1;
--
-- Name: template1; Type: DATABASE; Schema: -; Owner: postgres
--

CREATE DATABASE template1 WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'en_US.utf8';


ALTER DATABASE template1 OWNER TO postgres;

\connect template1

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: DATABASE template1; Type: COMMENT; Schema: -; Owner: postgres
--

COMMENT ON DATABASE template1 IS 'default template for new databases';


--
-- Name: template1; Type: DATABASE PROPERTIES; Schema: -; Owner: postgres
--

ALTER DATABASE template1 IS_TEMPLATE = true;


\connect template1

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: DATABASE template1; Type: ACL; Schema: -; Owner: postgres
--

REVOKE CONNECT,TEMPORARY ON DATABASE template1 FROM PUBLIC;
GRANT CONNECT ON DATABASE template1 TO PUBLIC;


--
-- PostgreSQL database dump complete
--

--
-- Database "crud_laravel" dump
--

--
-- PostgreSQL database dump
--

-- Dumped from database version 14.2 (Debian 14.2-1.pgdg110+1)
-- Dumped by pg_dump version 14.2 (Debian 14.2-1.pgdg110+1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: crud_laravel; Type: DATABASE; Schema: -; Owner: postgres
--

CREATE DATABASE crud_laravel WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'en_US.utf8';


ALTER DATABASE crud_laravel OWNER TO postgres;

\connect crud_laravel

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: appointments; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.appointments (
    id bigint NOT NULL,
    description text NOT NULL,
    date date NOT NULL,
    type text NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.appointments OWNER TO postgres;

--
-- Name: appointments_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.appointments_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.appointments_id_seq OWNER TO postgres;

--
-- Name: appointments_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.appointments_id_seq OWNED BY public.appointments.id;


--
-- Name: doctors; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.doctors (
    id bigint NOT NULL,
    name text NOT NULL,
    email text NOT NULL,
    crm text NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.doctors OWNER TO postgres;

--
-- Name: doctors_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.doctors_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.doctors_id_seq OWNER TO postgres;

--
-- Name: doctors_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.doctors_id_seq OWNED BY public.doctors.id;


--
-- Name: failed_jobs; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.failed_jobs (
    id bigint NOT NULL,
    uuid character varying(255) NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);


ALTER TABLE public.failed_jobs OWNER TO postgres;

--
-- Name: failed_jobs_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.failed_jobs_id_seq OWNER TO postgres;

--
-- Name: failed_jobs_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;


--
-- Name: migrations; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE public.migrations OWNER TO postgres;

--
-- Name: migrations_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.migrations_id_seq OWNER TO postgres;

--
-- Name: migrations_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;


--
-- Name: password_resets; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);


ALTER TABLE public.password_resets OWNER TO postgres;

--
-- Name: personal_access_tokens; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.personal_access_tokens (
    id bigint NOT NULL,
    tokenable_type character varying(255) NOT NULL,
    tokenable_id bigint NOT NULL,
    name character varying(255) NOT NULL,
    token character varying(64) NOT NULL,
    abilities text,
    last_used_at timestamp(0) without time zone,
    expires_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.personal_access_tokens OWNER TO postgres;

--
-- Name: personal_access_tokens_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.personal_access_tokens_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.personal_access_tokens_id_seq OWNER TO postgres;

--
-- Name: personal_access_tokens_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.personal_access_tokens_id_seq OWNED BY public.personal_access_tokens.id;


--
-- Name: users; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.users OWNER TO postgres;

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO postgres;

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;


--
-- Name: vaccines; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.vaccines (
    id bigint NOT NULL,
    name text NOT NULL,
    expected_date date NOT NULL,
    application_date date,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.vaccines OWNER TO postgres;

--
-- Name: vaccines_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.vaccines_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.vaccines_id_seq OWNER TO postgres;

--
-- Name: vaccines_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.vaccines_id_seq OWNED BY public.vaccines.id;


--
-- Name: appointments id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.appointments ALTER COLUMN id SET DEFAULT nextval('public.appointments_id_seq'::regclass);


--
-- Name: doctors id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.doctors ALTER COLUMN id SET DEFAULT nextval('public.doctors_id_seq'::regclass);


--
-- Name: failed_jobs id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);


--
-- Name: migrations id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);


--
-- Name: personal_access_tokens id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.personal_access_tokens ALTER COLUMN id SET DEFAULT nextval('public.personal_access_tokens_id_seq'::regclass);


--
-- Name: users id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);


--
-- Name: vaccines id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.vaccines ALTER COLUMN id SET DEFAULT nextval('public.vaccines_id_seq'::regclass);


--
-- Data for Name: appointments; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.appointments (id, description, date, type, created_at, updated_at) FROM stdin;
1	Consulta de rotina	2022-12-29	Fisioterapia	2022-12-29 18:32:50	2022-12-29 18:32:50
2	Consulta de retorno	2022-12-29	Odontologia	2022-12-29 18:32:50	2022-12-29 18:32:50
3	Consulta de rotina	2022-12-29	Psicologia	2022-12-29 18:32:50	2022-12-29 18:32:50
4	Consulta de checkup	2022-12-29	Nutrição	2022-12-29 18:32:50	2022-12-29 18:32:50
5	Consulta de checkup	2022-12-29	Fonoaudiologia	2022-12-29 18:32:50	2022-12-29 18:32:50
\.


--
-- Data for Name: doctors; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.doctors (id, name, email, crm, created_at, updated_at) FROM stdin;
1	Dr. House	default@dev.com	822706	2022-12-29 18:32:50	2022-12-29 18:32:50
2	Dr. Wilson	default@dev.com	504039	2022-12-29 18:32:50	2022-12-29 18:32:50
3	Dr. Julian	default@dev.com	333706	2022-12-29 18:32:50	2022-12-29 18:32:50
4	Dr. Drauzio Varella	default@dev.com	166364	2022-12-29 18:32:50	2022-12-29 18:32:50
5	Dr. Laravel	default@dev.com	901005	2022-12-29 18:32:50	2022-12-29 18:32:50
\.


--
-- Data for Name: failed_jobs; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.failed_jobs (id, uuid, connection, queue, payload, exception, failed_at) FROM stdin;
\.


--
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.migrations (id, migration, batch) FROM stdin;
1	2014_10_12_000000_create_users_table	1
2	2014_10_12_100000_create_password_resets_table	1
3	2019_08_19_000000_create_failed_jobs_table	1
4	2019_12_14_000001_create_personal_access_tokens_table	1
5	2022_11_22_225512_create_doctors_table	1
6	2022_11_22_231044_create_vaccines_table	1
7	2022_11_22_231125_create_appointments_table	1
8	2022_11_23_001727_make_application_date_nullable	1
\.


--
-- Data for Name: password_resets; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.password_resets (email, token, created_at) FROM stdin;
\.


--
-- Data for Name: personal_access_tokens; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.personal_access_tokens (id, tokenable_type, tokenable_id, name, token, abilities, last_used_at, expires_at, created_at, updated_at) FROM stdin;
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at) FROM stdin;
1	Virgil Emmerich	metz.rita@example.org	2022-12-29 18:32:50	$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi	BbmNZUTu75	2022-12-29 18:32:50	2022-12-29 18:32:50
2	Rebecca Hane	garnet.hettinger@example.com	2022-12-29 18:32:50	$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi	denNkRm7IZ	2022-12-29 18:32:50	2022-12-29 18:32:50
3	Wayne Wyman	gwuckert@example.net	2022-12-29 18:32:50	$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi	34avdJYp6G	2022-12-29 18:32:50	2022-12-29 18:32:50
4	Scot Quitzon	price.alycia@example.net	2022-12-29 18:32:50	$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi	sco0SGla8f	2022-12-29 18:32:50	2022-12-29 18:32:50
5	Lue Wunsch	tillman.clark@example.com	2022-12-29 18:32:50	$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi	r4pQrOlLli	2022-12-29 18:32:50	2022-12-29 18:32:50
6	Berry Goyette	murray.forest@example.net	2022-12-29 18:32:50	$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi	0ul3Htah6q	2022-12-29 18:32:50	2022-12-29 18:32:50
7	Mrs. Kirsten Buckridge	beer.kelli@example.com	2022-12-29 18:32:50	$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi	eKMBNS3BRi	2022-12-29 18:32:50	2022-12-29 18:32:50
8	Myrtice Altenwerth	oboyle@example.com	2022-12-29 18:32:50	$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi	nfXbXtPnBz	2022-12-29 18:32:50	2022-12-29 18:32:50
9	Ms. Ava Miller V	feil.alfreda@example.com	2022-12-29 18:32:50	$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi	kGgKwPTryB	2022-12-29 18:32:50	2022-12-29 18:32:50
10	Prof. Doris Skiles I	dabshire@example.com	2022-12-29 18:32:50	$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi	Vp2w0Uxw4q	2022-12-29 18:32:50	2022-12-29 18:32:50
11	Usuário de Teste	test@dev.com	2022-12-29 18:32:50	$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi	tFedB70nc6	2022-12-29 18:32:50	2022-12-29 18:32:50
\.


--
-- Data for Name: vaccines; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.vaccines (id, name, expected_date, application_date, created_at, updated_at) FROM stdin;
1	Covid - 1a Dose	2022-12-17	2022-12-12	2022-12-29 18:32:50	2022-12-29 18:32:50
2	Covid - 2a Dose	2022-12-17	2022-12-12	2022-12-29 18:32:50	2022-12-29 18:32:50
3	Covid - 3a Dose	2022-12-17	2022-12-12	2022-12-29 18:32:50	2022-12-29 18:32:50
4	Covid - 4a Dose	2022-12-17	2022-12-12	2022-12-29 18:32:50	2022-12-29 18:32:50
5	Antitetânica	2022-12-17	2022-12-12	2022-12-29 18:32:50	2022-12-29 18:32:50
\.


--
-- Name: appointments_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.appointments_id_seq', 5, true);


--
-- Name: doctors_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.doctors_id_seq', 5, true);


--
-- Name: failed_jobs_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);


--
-- Name: migrations_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.migrations_id_seq', 8, true);


--
-- Name: personal_access_tokens_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.personal_access_tokens_id_seq', 1, false);


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.users_id_seq', 11, true);


--
-- Name: vaccines_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.vaccines_id_seq', 5, true);


--
-- Name: appointments appointments_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.appointments
    ADD CONSTRAINT appointments_pkey PRIMARY KEY (id);


--
-- Name: doctors doctors_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.doctors
    ADD CONSTRAINT doctors_pkey PRIMARY KEY (id);


--
-- Name: failed_jobs failed_jobs_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);


--
-- Name: failed_jobs failed_jobs_uuid_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_uuid_unique UNIQUE (uuid);


--
-- Name: migrations migrations_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);


--
-- Name: personal_access_tokens personal_access_tokens_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_pkey PRIMARY KEY (id);


--
-- Name: personal_access_tokens personal_access_tokens_token_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_token_unique UNIQUE (token);


--
-- Name: users users_email_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- Name: vaccines vaccines_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.vaccines
    ADD CONSTRAINT vaccines_pkey PRIMARY KEY (id);


--
-- Name: password_resets_email_index; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX password_resets_email_index ON public.password_resets USING btree (email);


--
-- Name: personal_access_tokens_tokenable_type_tokenable_id_index; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX personal_access_tokens_tokenable_type_tokenable_id_index ON public.personal_access_tokens USING btree (tokenable_type, tokenable_id);


--
-- PostgreSQL database dump complete
--

--
-- Database "database_name" dump
--

--
-- PostgreSQL database dump
--

-- Dumped from database version 14.2 (Debian 14.2-1.pgdg110+1)
-- Dumped by pg_dump version 14.2 (Debian 14.2-1.pgdg110+1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: database_name; Type: DATABASE; Schema: -; Owner: postgres
--

CREATE DATABASE database_name WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'en_US.utf8';


ALTER DATABASE database_name OWNER TO postgres;

\connect database_name

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: adresses; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.adresses (
    id uuid NOT NULL,
    country character varying,
    state character varying,
    city character varying,
    created_at timestamp without time zone DEFAULT now() NOT NULL,
    updated_at timestamp without time zone DEFAULT now() NOT NULL
);


ALTER TABLE public.adresses OWNER TO postgres;

--
-- Name: comments; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.comments (
    id uuid NOT NULL,
    text character varying NOT NULL,
    owner_id uuid NOT NULL,
    post_id uuid NOT NULL,
    parent_comment_id uuid,
    created_at timestamp without time zone DEFAULT now() NOT NULL,
    updated_at timestamp without time zone DEFAULT now() NOT NULL
);


ALTER TABLE public.comments OWNER TO postgres;

--
-- Name: likes; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.likes (
    id uuid NOT NULL,
    user_id uuid NOT NULL,
    post_id uuid NOT NULL,
    created_at timestamp without time zone DEFAULT now() NOT NULL,
    updated_at timestamp without time zone DEFAULT now() NOT NULL
);


ALTER TABLE public.likes OWNER TO postgres;

--
-- Name: migrations; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.migrations (
    id integer NOT NULL,
    "timestamp" bigint NOT NULL,
    name character varying NOT NULL
);


ALTER TABLE public.migrations OWNER TO postgres;

--
-- Name: migrations_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.migrations_id_seq OWNER TO postgres;

--
-- Name: migrations_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;


--
-- Name: posts; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.posts (
    id uuid NOT NULL,
    description character varying NOT NULL,
    image character varying NOT NULL,
    owner_id uuid NOT NULL,
    created_at timestamp without time zone DEFAULT now() NOT NULL,
    updated_at timestamp without time zone DEFAULT now() NOT NULL
);


ALTER TABLE public.posts OWNER TO postgres;

--
-- Name: typeorm_metadata; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.typeorm_metadata (
    type character varying NOT NULL,
    database character varying,
    schema character varying,
    "table" character varying,
    name character varying,
    value text
);


ALTER TABLE public.typeorm_metadata OWNER TO postgres;

--
-- Name: user_keys; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.user_keys (
    id uuid NOT NULL,
    key uuid NOT NULL,
    user_id uuid NOT NULL,
    created_at timestamp without time zone DEFAULT now() NOT NULL,
    updated_at timestamp without time zone DEFAULT now() NOT NULL
);


ALTER TABLE public.user_keys OWNER TO postgres;

--
-- Name: users; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.users (
    id uuid NOT NULL,
    username character varying,
    display_name character varying,
    birthday timestamp without time zone,
    role character varying DEFAULT 'user'::character varying NOT NULL,
    email character varying NOT NULL,
    password character varying,
    nba_team character varying,
    address_id uuid,
    avatar character varying DEFAULT 'profile_default.jpg'::character varying NOT NULL,
    cover character varying DEFAULT 'cover_default.jpg'::character varying NOT NULL,
    created_at timestamp without time zone DEFAULT now() NOT NULL,
    updated_at timestamp without time zone DEFAULT now() NOT NULL,
    bio character varying
);


ALTER TABLE public.users OWNER TO postgres;

--
-- Name: migrations id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);


--
-- Data for Name: adresses; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.adresses (id, country, state, city, created_at, updated_at) FROM stdin;
2df08979-092a-4262-8aab-9bdf887e2d50	\N	\N	\N	2022-04-04 22:24:40.687301	2022-04-04 22:24:40.687301
effde75f-14f8-4584-a3e2-ddeca468ec5c	\N	\N	\N	2022-04-04 22:26:17.153168	2022-04-04 22:26:17.153168
c258183b-d09c-4a37-a5de-8ff9d39393a2	\N	\N	\N	2022-04-06 21:48:38.500679	2022-04-06 21:48:38.500679
1ce1ad3a-0a7c-4e00-a29c-ebed174f3232	\N	\N	\N	2022-04-06 22:21:38.265372	2022-04-06 22:21:38.265372
1b9d931d-86c9-413c-adb6-517ccaf43f5c	\N	\N	\N	2022-04-06 22:34:17.240938	2022-04-06 22:34:17.240938
86555d0f-26ec-4fda-b7ec-35ddd8cccf26	\N	\N	\N	2022-04-08 21:04:17.831628	2022-04-08 21:04:17.831628
089d7625-7076-4755-9de8-df862e7f5063	\N	\N	\N	2022-04-11 15:03:50.437929	2022-04-11 15:03:50.437929
f3122d1b-ee12-413f-8b68-5ea92bcdc3dc	\N	\N	\N	2022-04-18 17:21:57.790838	2022-04-18 17:21:57.790838
7e82d737-236f-4542-8f36-a67810d8b113	\N	\N	\N	2022-04-18 17:32:32.654747	2022-04-18 17:32:32.654747
aa6945bc-9d9b-40a6-8f4c-cc047bd5fa0d	\N	\N	\N	2022-04-19 04:50:10.336192	2022-04-19 04:50:10.336192
43c1cd2f-3f7d-4e22-9c4f-1ce9c73511a2	\N	\N	\N	2022-04-19 13:19:27.411864	2022-04-19 13:19:27.411864
5622936f-ee8b-40ba-93c4-5a9c14bd5a9f	\N	\N	\N	2022-04-19 13:19:53.28074	2022-04-19 13:19:53.28074
6b475e6b-994d-4aae-b644-e0a82ef01e51	\N	\N	\N	2022-04-19 13:20:26.094774	2022-04-19 13:20:26.094774
363957eb-03ee-4363-a769-27e319581414	\N	\N	\N	2022-04-19 13:21:04.082031	2022-04-19 13:21:04.082031
6ccc6057-c1ef-4210-8990-be07e26ecf59	\N	\N	\N	2022-04-19 13:21:30.304561	2022-04-19 13:21:30.304561
79b35514-86e0-412c-b73f-4838e6e1bc1b	\N	\N	\N	2022-04-19 13:22:13.855551	2022-04-19 13:22:13.855551
c01ca814-9f91-4029-b706-df374bd52bff	\N	\N	\N	2022-04-19 13:57:18.137318	2022-04-19 13:57:18.137318
902611a7-99e1-4bac-a6dc-fa29ea2f9139	\N	\N	\N	2022-04-19 14:34:14.815611	2022-04-19 14:34:14.815611
30b2f284-9298-4fba-a9f3-7b04c1e1e9a1	\N	\N	\N	2022-04-22 13:08:04.522673	2022-04-22 13:08:04.522673
\.


--
-- Data for Name: comments; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.comments (id, text, owner_id, post_id, parent_comment_id, created_at, updated_at) FROM stdin;
706de21e-1fba-43c4-a779-b03971fc6a3d	AAA	a9c2ec0e-9d56-4fa6-aa4d-ba3a935747a0	3f8b513a-3efa-451f-bea8-397b122cb9fc	\N	2022-04-19 22:14:57.895748	2022-04-19 22:14:57.895748
67d57b12-45a1-46fe-93fc-82e6943214d0	AAAAAdada	86a2df5c-012c-4f21-b199-e8f8a4fa361f	589d107b-fe80-42ca-9aed-4072d53f170b	\N	2022-04-19 22:36:28.115028	2022-04-19 22:36:28.115028
7ea7414c-58b9-40c6-a288-0c993807cc95	asdasdsa	86a2df5c-012c-4f21-b199-e8f8a4fa361f	589d107b-fe80-42ca-9aed-4072d53f170b	67d57b12-45a1-46fe-93fc-82e6943214d0	2022-04-19 22:36:32.535509	2022-04-19 22:36:32.535509
b8e27db8-5511-44a9-97d0-fe33d068aa74	Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae inventore perferendis veritatis commodi voluptatum qui repellendus placeat iusto asperiores omnis voluptatem, nesciunt dolore iure esse nemo cupiditate incidunt ullam dignissimos hic ipsa sapiente. Numquam, dolore? Eum nesciunt, vitae repellat ad repudiandae porro doloribus error architecto expedita officia ducimus voluptatibus alias.	1d88bb68-809e-43cd-90e5-c7dd697e67f7	e41152fd-3282-4a4a-bed6-2da661954753	\N	2022-04-22 12:20:53.855428	2022-04-22 12:20:53.855428
080c726d-d546-4476-998c-5654c0edd13f	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus dolorum iste excepturi iure ut obcaecati.	86a2df5c-012c-4f21-b199-e8f8a4fa361f	e41152fd-3282-4a4a-bed6-2da661954753	b8e27db8-5511-44a9-97d0-fe33d068aa74	2022-04-22 12:21:42.752815	2022-04-22 12:21:42.752815
c822ccd2-8748-46eb-8a9f-638d8aab1da1	Lorem ipsum dolor sit amet, consectetur adipisicing elit.	86a2df5c-012c-4f21-b199-e8f8a4fa361f	e41152fd-3282-4a4a-bed6-2da661954753	b8e27db8-5511-44a9-97d0-fe33d068aa74	2022-04-22 12:21:49.108506	2022-04-22 12:21:49.108506
eb9d2284-b40c-48ea-88d4-2a297a37647d	Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla laudantium deserunt iste harum molestias impedit, necessitatibus et expedita delectus nobis! Laudantium eos, impedit recusandae eaque culpa voluptatem perferendis quas nesciunt.	a9c2ec0e-9d56-4fa6-aa4d-ba3a935747a0	e41152fd-3282-4a4a-bed6-2da661954753	b8e27db8-5511-44a9-97d0-fe33d068aa74	2022-04-22 12:22:16.329464	2022-04-22 12:22:16.329464
9e5efe46-1e3d-42de-bf4d-db401f21a812	Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla laudantium deserunt iste harum molestias impedit, necessitatibus et expedita delectus nobis! Laudantium eos.	a9c2ec0e-9d56-4fa6-aa4d-ba3a935747a0	e41152fd-3282-4a4a-bed6-2da661954753	\N	2022-04-22 12:22:26.354187	2022-04-22 12:22:26.354187
e2ddc188-465e-47a1-8126-3f93afa26959	Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla laudantium deserunt iste harum molestias impedit.	25fa20b7-bbee-4666-93ca-bfc1f8cacd08	e41152fd-3282-4a4a-bed6-2da661954753	b8e27db8-5511-44a9-97d0-fe33d068aa74	2022-04-22 12:23:03.930127	2022-04-22 12:23:03.930127
fb7e9330-df69-48c7-af43-b30a82967303	Lorem ipsum dolor sit amet consectetur.	25fa20b7-bbee-4666-93ca-bfc1f8cacd08	e41152fd-3282-4a4a-bed6-2da661954753	b8e27db8-5511-44a9-97d0-fe33d068aa74	2022-04-22 12:23:21.605482	2022-04-22 12:23:21.605482
3fe3f25d-0bc2-4961-b69f-e32510a43474	oi	71d368b6-5e6a-44ac-ba17-87905ac2b9b8	ab6e113a-87fe-44b8-84dc-27d4a57cb6a6	\N	2022-04-22 13:08:25.767937	2022-04-22 13:08:25.767937
cba61959-f6f0-4fbf-a17d-5a4fb1bb65d6	oioi	71d368b6-5e6a-44ac-ba17-87905ac2b9b8	ab6e113a-87fe-44b8-84dc-27d4a57cb6a6	3fe3f25d-0bc2-4961-b69f-e32510a43474	2022-04-22 13:08:32.822659	2022-04-22 13:08:32.822659
\.


--
-- Data for Name: likes; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.likes (id, user_id, post_id, created_at, updated_at) FROM stdin;
7027ad9d-a59c-4018-a1bd-6f5f107fd514	05725c6e-e6a4-477d-a9b4-d401056a3120	3f8b513a-3efa-451f-bea8-397b122cb9fc	2022-04-19 22:10:47.465712	2022-04-19 22:10:47.465712
9e6f1e95-ea8f-4e69-90d1-1993c49189d5	a9c2ec0e-9d56-4fa6-aa4d-ba3a935747a0	3f8b513a-3efa-451f-bea8-397b122cb9fc	2022-04-19 22:14:44.324022	2022-04-19 22:14:44.324022
e61b075e-15d3-450e-badc-00644ee8b61a	a9c2ec0e-9d56-4fa6-aa4d-ba3a935747a0	589d107b-fe80-42ca-9aed-4072d53f170b	2022-04-19 22:14:45.845263	2022-04-19 22:14:45.845263
33467469-5445-44cd-bc31-d545630cdd2a	05725c6e-e6a4-477d-a9b4-d401056a3120	589d107b-fe80-42ca-9aed-4072d53f170b	2022-04-19 22:21:00.51982	2022-04-19 22:21:00.51982
c3afe667-564f-42fe-ab73-0c48f7040125	86a2df5c-012c-4f21-b199-e8f8a4fa361f	589d107b-fe80-42ca-9aed-4072d53f170b	2022-04-19 22:36:18.707874	2022-04-19 22:36:18.707874
ee7175a0-fc6d-4f8c-ac73-0a1d76c9058d	86a2df5c-012c-4f21-b199-e8f8a4fa361f	e41152fd-3282-4a4a-bed6-2da661954753	2022-04-22 12:21:17.663923	2022-04-22 12:21:17.663923
95ec1a66-ced9-4ed5-b40b-975f39b5886a	71d368b6-5e6a-44ac-ba17-87905ac2b9b8	ab6e113a-87fe-44b8-84dc-27d4a57cb6a6	2022-04-22 13:08:14.040257	2022-04-22 13:08:14.040257
51217ceb-ed2f-40d2-8a71-e0f6ebe7f403	71d368b6-5e6a-44ac-ba17-87905ac2b9b8	e41152fd-3282-4a4a-bed6-2da661954753	2022-04-22 13:08:17.583035	2022-04-22 13:08:17.583035
21555526-cf7c-4aad-afdd-452ce7a7cae3	71d368b6-5e6a-44ac-ba17-87905ac2b9b8	589d107b-fe80-42ca-9aed-4072d53f170b	2022-04-22 13:46:04.531832	2022-04-22 13:46:04.531832
\.


--
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.migrations (id, "timestamp", name) FROM stdin;
1	1645478673280	CreateUsers1645478673280
2	1645570367573	CreateAddress1645570367573
3	1645570803177	CreateUserAddressRelation1645570803177
4	1645727235565	CreatePost1645727235565
5	1645728654426	CreatePostUserRelation1645728654426
6	1646349792229	CreateLikes1646349792229
7	1646430909847	CreateUserKeys1646430909847
9	1647378822455	CreateComments1647378822455
10	1650567779791	CreateUserBio1650567779791
\.


--
-- Data for Name: posts; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.posts (id, description, image, owner_id, created_at, updated_at) FROM stdin;
3f8b513a-3efa-451f-bea8-397b122cb9fc	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tristique, tortor et porttitor tincidunt, justo arcu aliquam lorem, in maximus augue erat convallis lectus.	post1.jpeg	a9c2ec0e-9d56-4fa6-aa4d-ba3a935747a0	2022-04-19 13:59:51.605793	2022-04-19 13:59:51.605793
589d107b-fe80-42ca-9aed-4072d53f170b	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tristique, tortor et porttitor tincidunt, justo arcu aliquam lorem, in maximus augue erat convallis lectus.	post2.jpg	05725c6e-e6a4-477d-a9b4-d401056a3120	2022-04-19 14:00:26.235198	2022-04-19 14:00:26.235198
e2a5d339-99b8-4eff-b790-94a9b16319ed		8eb4b2a463274871a6b2d3df412f98f8.jpg	86a2df5c-012c-4f21-b199-e8f8a4fa361f	2022-04-22 12:15:11.14125	2022-04-22 12:15:11.14125
e41152fd-3282-4a4a-bed6-2da661954753	Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae inventore perferendis veritatis commodi voluptatum qui repellendus placeat iusto asperiores omnis voluptatem, nesciunt dolore iure esse nemo cupiditate incidunt ullam dignissimos hic ipsa sapiente. Numquam, dolore? Eum nesciunt, vitae repellat ad repudiandae porro doloribus error architecto expedita officia ducimus voluptatibus alias.	25ca267096cd891d1de734f95ce22c1e.jpg	25fa20b7-bbee-4666-93ca-bfc1f8cacd08	2022-04-22 12:17:07.439128	2022-04-22 12:17:07.439128
ab6e113a-87fe-44b8-84dc-27d4a57cb6a6		b89658b436780a52ca1a66ecfb61526a.jpg	25fa20b7-bbee-4666-93ca-bfc1f8cacd08	2022-04-22 12:19:56.717934	2022-04-22 12:19:56.717934
4ac20d22-8305-45e4-a566-9b65449ee0e9		ed6496ab3e1e78cf2a01eb102daa68ce.jpg	71d368b6-5e6a-44ac-ba17-87905ac2b9b8	2022-04-22 13:11:15.376646	2022-04-22 13:11:15.376646
b6e43ad9-bb96-4f4a-ad65-e1ba6c33ac40	fasfasfsaf	0bb5876b55ad8f678f5fe035417bc130.jpg	71d368b6-5e6a-44ac-ba17-87905ac2b9b8	2022-04-22 13:39:20.474784	2022-04-22 13:39:20.474784
\.


--
-- Data for Name: typeorm_metadata; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.typeorm_metadata (type, database, schema, "table", name, value) FROM stdin;
\.


--
-- Data for Name: user_keys; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.user_keys (id, key, user_id, created_at, updated_at) FROM stdin;
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.users (id, username, display_name, birthday, role, email, password, nba_team, address_id, avatar, cover, created_at, updated_at, bio) FROM stdin;
86a2df5c-012c-4f21-b199-e8f8a4fa361f	youngtrae	Trae Young	2022-03-21 21:00:00	verified	traeyoung@hotmail.com	$2a$08$nZEgJybPIk.oqqBch9HUbuUh4K91g4Nie24U.saQwJ83DtubJ/qJ.	Atlanta Hawks	5622936f-ee8b-40ba-93c4-5a9c14bd5a9f	e70f4a9847aa412e43b7ad4cfe5cba0f.jpg	8f59f249e1ed4430b79514c478d658c6.jpg	2022-04-19 13:17:49.086683	2022-04-21 20:26:50.781925	Bio nova
1d88bb68-809e-43cd-90e5-c7dd697e67f7	adebayo	Bam Adebayo	2022-04-10 21:00:00	verified	adebayo@hotmail.com	$2a$08$gnn8Vc9km.Ww.RU.klIAbOXGuNYoRl93HoZbajWf2fITIs8l9X1UG	Miami Heat	79b35514-86e0-412c-b73f-4838e6e1bc1b	0d83126bc5f958b820e6c6cb938deeb1.jpg	792ca032daffabcf0a531099d6275784.jpg	2022-04-19 13:18:38.243276	2022-04-19 13:25:46.125849	\N
a9c2ec0e-9d56-4fa6-aa4d-ba3a935747a0	curry	Stephen Curry	2022-04-18 21:00:00	verified	stephcurry@hotmail.com	$2a$08$K76h7WGbQhezlG9l//wuzeCdOjHc1XaIg4bS7qpXJ79KB75JCRCs2	Golden State Warriors	6b475e6b-994d-4aae-b644-e0a82ef01e51	186957fdff90abb2e73d9cd8a7007bf1.jpg	0cb8ebe26ee570de9a63ed59491994b8.jpg	2022-04-19 13:17:58.440465	2022-04-19 13:26:27.169925	\N
05725c6e-e6a4-477d-a9b4-d401056a3120	james	Lebron James	2022-04-12 21:00:00	verified	lebronjames@hotmail.com	$2a$08$CTsoOug3CH8TIC/J9tKrXeRGjJdHdOYhEggx1hbSTE3PO4C91cuPO	Los Angeles Lakers	43c1cd2f-3f7d-4e22-9c4f-1ce9c73511a2	3a8c56aff8a85810c7c2b2eaff379f87.jpg	c1dd1745007b73ff015f061541548116.jpg	2022-04-19 13:17:39.743448	2022-04-19 13:27:02.607578	\N
25fa20b7-bbee-4666-93ca-bfc1f8cacd08	doncic	Luka Dončić	2022-04-03 21:00:00	verified	lukadoncic@hotmail.com	$2a$08$9BWjEjk4G2C.rzGfKo94A.Qy.Y.C5TWnpn26U9j8.sRLx58X9siLC	Dallas Mavericks	6ccc6057-c1ef-4210-8990-be07e26ecf59	91d74dc31975c364f31cb4faf1cab441.jpg	ca87560dc6e20d9d015789e610b789dc.jpg	2022-04-19 13:18:26.636942	2022-04-19 13:28:17.765073	\N
71d368b6-5e6a-44ac-ba17-87905ac2b9b8	teste	Teste	2022-04-10 21:00:00	user	teste@hotmail.com	$2a$08$RvY8ZoSWfS6ofb7eOjHjCuE29BQWF1qVMTKNxCPcb9jDjoVSSiRj.	Houston Rockets	30b2f284-9298-4fba-a9f3-7b04c1e1e9a1	c30ac57d936769fb449a071138a887b8.jpg	aa036bf6c7f0817fc2cbfea36e89371b.jpg	2022-04-22 13:06:53.957737	2022-04-22 13:39:09.590621	dadasdasdasdasdasdasdasd
\.


--
-- Name: migrations_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.migrations_id_seq', 10, true);


--
-- Name: adresses PK_2787c84f7433e390ff8961d552d; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.adresses
    ADD CONSTRAINT "PK_2787c84f7433e390ff8961d552d" PRIMARY KEY (id);


--
-- Name: posts PK_2829ac61eff60fcec60d7274b9e; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.posts
    ADD CONSTRAINT "PK_2829ac61eff60fcec60d7274b9e" PRIMARY KEY (id);


--
-- Name: comments PK_8bf68bc960f2b69e818bdb90dcb; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.comments
    ADD CONSTRAINT "PK_8bf68bc960f2b69e818bdb90dcb" PRIMARY KEY (id);


--
-- Name: migrations PK_8c82d7f526340ab734260ea46be; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT "PK_8c82d7f526340ab734260ea46be" PRIMARY KEY (id);


--
-- Name: users PK_a3ffb1c0c8416b9fc6f907b7433; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT "PK_a3ffb1c0c8416b9fc6f907b7433" PRIMARY KEY (id);


--
-- Name: likes PK_a9323de3f8bced7539a794b4a37; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.likes
    ADD CONSTRAINT "PK_a9323de3f8bced7539a794b4a37" PRIMARY KEY (id);


--
-- Name: user_keys PK_a9df16797b63998be19abb49b34; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.user_keys
    ADD CONSTRAINT "PK_a9df16797b63998be19abb49b34" PRIMARY KEY (id);


--
-- Name: users UQ_97672ac88f789774dd47f7c8be3; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT "UQ_97672ac88f789774dd47f7c8be3" UNIQUE (email);


--
-- Name: user_keys UQ_b5a96c5874f7399f1c95c19e263; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.user_keys
    ADD CONSTRAINT "UQ_b5a96c5874f7399f1c95c19e263" UNIQUE (key);


--
-- Name: users UQ_fe0bb3f6520ee0469504521e710; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT "UQ_fe0bb3f6520ee0469504521e710" UNIQUE (username);


--
-- Name: comments comments_parent_FK; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.comments
    ADD CONSTRAINT "comments_parent_FK" FOREIGN KEY (parent_comment_id) REFERENCES public.comments(id) ON DELETE CASCADE;


--
-- Name: comments comments_post_FK; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.comments
    ADD CONSTRAINT "comments_post_FK" FOREIGN KEY (post_id) REFERENCES public.posts(id) ON DELETE CASCADE;


--
-- Name: comments comments_user_FK; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.comments
    ADD CONSTRAINT "comments_user_FK" FOREIGN KEY (owner_id) REFERENCES public.users(id) ON DELETE CASCADE;


--
-- Name: likes likes_post_FK; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.likes
    ADD CONSTRAINT "likes_post_FK" FOREIGN KEY (post_id) REFERENCES public.posts(id) ON DELETE CASCADE;


--
-- Name: likes likes_user_FK; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.likes
    ADD CONSTRAINT "likes_user_FK" FOREIGN KEY (user_id) REFERENCES public.users(id) ON DELETE CASCADE;


--
-- Name: posts posts_user_FK; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.posts
    ADD CONSTRAINT "posts_user_FK" FOREIGN KEY (owner_id) REFERENCES public.users(id) ON DELETE CASCADE;


--
-- Name: users user_address_FK; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT "user_address_FK" FOREIGN KEY (address_id) REFERENCES public.adresses(id) ON DELETE CASCADE;


--
-- Name: user_keys user_keys_FK; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.user_keys
    ADD CONSTRAINT "user_keys_FK" FOREIGN KEY (user_id) REFERENCES public.users(id) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- PostgreSQL database dump complete
--

--
-- Database "postgres" dump
--

--
-- PostgreSQL database dump
--

-- Dumped from database version 14.2 (Debian 14.2-1.pgdg110+1)
-- Dumped by pg_dump version 14.2 (Debian 14.2-1.pgdg110+1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

DROP DATABASE postgres;
--
-- Name: postgres; Type: DATABASE; Schema: -; Owner: postgres
--

CREATE DATABASE postgres WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'en_US.utf8';


ALTER DATABASE postgres OWNER TO postgres;

\connect postgres

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: DATABASE postgres; Type: COMMENT; Schema: -; Owner: postgres
--

COMMENT ON DATABASE postgres IS 'default administrative connection database';


--
-- PostgreSQL database dump complete
--

--
-- PostgreSQL database cluster dump complete
--


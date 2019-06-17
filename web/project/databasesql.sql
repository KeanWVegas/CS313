-- Table: public.users

-- DROP TABLE public.users;

CREATE TABLE public.users
(
    id integer NOT NULL DEFAULT nextval('users_id_seq'::regclass) ( INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 2147483647 CACHE 1 ),
    name character varying(20) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT users_pkey PRIMARY KEY (id),
    CONSTRAINT "Unique Users Constraints" UNIQUE (name)

)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.users
    OWNER to dkqfstgvudohch;

COMMENT ON CONSTRAINT "Unique Users Constraints" ON public.users
    IS 'This constraint prevents users from using the same username twice.';
    
-- SEQUENCE: public.users_id_seq

-- DROP SEQUENCE public.users_id_seq;

CREATE SEQUENCE public.users_id_seq
    INCREMENT 1
    START 20
    MINVALUE 1
    MAXVALUE 2147483647
    CACHE 1;

ALTER SEQUENCE public.users_id_seq
    OWNER TO dkqfstgvudohch;
    
-- Table: public.lists

-- DROP TABLE public.lists;

CREATE TABLE public.lists
(
    id integer NOT NULL DEFAULT nextval('lists_id_seq'::regclass),
    status character varying(4) COLLATE pg_catalog."default",
    item character varying(100) COLLATE pg_catalog."default",
    userid integer,
    CONSTRAINT list_pkey PRIMARY KEY (id),
    CONSTRAINT id UNIQUE (id)
,
    CONSTRAINT useridcon FOREIGN KEY (userid)
        REFERENCES public.users (id) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.lists
    OWNER to dkqfstgvudohch;
    
-- SEQUENCE: public.lists_id_seq

-- DROP SEQUENCE public.lists_id_seq;

CREATE SEQUENCE public.lists_id_seq
    INCREMENT 1
    START 35
    MINVALUE 1
    MAXVALUE 2147483647
    CACHE 1;

ALTER SEQUENCE public.lists_id_seq
    OWNER TO dkqfstgvudohch;
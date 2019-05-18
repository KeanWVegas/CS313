-- SEQUENCE: public.users_id_seq

-- DROP SEQUENCE public.users_id_seq;

CREATE SEQUENCE public.users_id_seq
    INCREMENT 1
    START 1
    MINVALUE 1
    MAXVALUE 2147483647
    CACHE 1;

ALTER SEQUENCE public.users_id_seq
    OWNER TO dkqfstgvudohch;

-- Table: public.users

-- DROP TABLE public.users;

CREATE TABLE public.users
(
    id integer NOT NULL DEFAULT nextval('users_id_seq'::regclass) ( INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 2147483647 CACHE 1 ),
    name character varying(20) COLLATE pg_catalog."default" NOT NULL,
    created timestamp with time zone NOT NULL,
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
    
-- SEQUENCE: public.lists_id_seq

-- DROP SEQUENCE public.lists_id_seq;

CREATE SEQUENCE public.lists_id_seq
    INCREMENT 1
    START 1
    MINVALUE 1
    MAXVALUE 2147483647
    CACHE 1;

ALTER SEQUENCE public.lists_id_seq
    OWNER TO dkqfstgvudohch;
    
-- Table: public.lists

-- DROP TABLE public.lists;

CREATE TABLE public.lists
(
    id integer NOT NULL DEFAULT nextval('lists_id_seq'::regclass),
    list character varying(40) COLLATE pg_catalog."default",
    CONSTRAINT list_pkey PRIMARY KEY (id),
    CONSTRAINT id UNIQUE (id)

)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.lists
    OWNER to dkqfstgvudohch;
    
-- Table: public.users_lists

-- DROP TABLE public.users_lists;

CREATE TABLE public.users_lists
(
    user_id integer NOT NULL,
    list_id integer NOT NULL,
    user_name character varying(20) COLLATE pg_catalog."default" NOT NULL,
    list_list character varying(40) COLLATE pg_catalog."default" NOT NULL,
    user_lists_id integer NOT NULL,
    CONSTRAINT users_lists_pkey PRIMARY KEY (user_lists_id),
    CONSTRAINT list_id FOREIGN KEY (list_id)
        REFERENCES public.lists (id) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION,
    CONSTRAINT user_id FOREIGN KEY (user_id)
        REFERENCES public.users (id) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.users_lists
    OWNER to dkqfstgvudohch;
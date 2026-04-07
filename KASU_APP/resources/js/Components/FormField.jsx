function FormField({children, submit}) {
    return (
        <form onSubmit={submit} className="grid grid-cols-2 gap-4">
              {children}
        </form>
    )
}

export default FormField
